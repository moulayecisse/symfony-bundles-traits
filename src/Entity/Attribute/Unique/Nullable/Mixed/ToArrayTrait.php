<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Mixed;

use App\Entity\AbstractEntity;
use DateTime;
use Doctrine\Common\Collections\Collection;
use function Symfony\Component\String\u;

trait ToArrayTrait
{
    public function __toArray(
        int   $depth = 2,
        array $excludes = [
            '*.createdBy',
            '*.updatedBy',
        ],
        array $includes = [],
        array $merges = [],
        array $options = []
    ): array
    {
        $depth = $depth - 1;
        $array = [];

        foreach (get_class_methods($this) as $method) {
            if (u($method)->startsWith('get') || u($method)->startsWith('is')) {
                $name = $method;

                if (u($method)->startsWith('get')) {
                    $name = u($method)->slice(3)->toString();
                } elseif (u($method)->startsWith('is')) {
                    $name = u($method)->slice(2)->toString();
                }

                $name = lcfirst($name);

                if (
                    in_array($name, $excludes)
                    || in_array('*.' . $name, $excludes)
                    || in_array('*', $excludes)
                ) {
                    if (
                        !in_array($name, $includes)
                        || !in_array('*.' . $name, $includes)
                        || !in_array('*', $includes)
                    ) {
                        continue;
                    }
                }

                $value = $this->{$method}();

                if (is_array($value)) {
                    $array[$name] = $value;
                }

                if (is_scalar($value)) {
                    $array[$name] = $value;
                }

                if ($value instanceof DateTime) {
                    $array[$name] = $value->format('Y-m-d H:i:s');
                }

                if ($value instanceof AbstractEntity) {
                    if ($depth >= 1) {
                        $array[$name] = $value->__toArray(
                            $depth,
                            $excludes,
                            $includes,
                            $merges,
                            $options,
                        );
                    } else {
                        $array[$name] = $value->getId();
                    }
                }

                if ($value instanceof Collection) {
                    foreach ($value as $item) {
                        if ($item instanceof AbstractEntity) {
                            if ($depth >= 1) {
                                $array[$name][] = $item->__toArray(
                                    $depth,
                                    [
                                        '*.createdBy',
                                        '*.updatedBy',
                                    ],
                                    [],
                                    [],
                                    []
                                );
                            } else {
                                $array[$name][] = $item->getId();
                            }
                        } else {
                            $array[$name][] = $item->getId() ?? 0;
                        }
                    }
                }
            }
        }

        return $array;
    }
}
