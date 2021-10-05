<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use App\Utility\StringUtility;
use BadMethodCallException;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\MakerBundle\Str;

trait ExtrasTrait
{
    #[ORM\Column(type: Types::JSON, unique: true, nullable: true)]
    protected array $extras = [];

    public function __call($method, $arguments)
    {
        if (str_starts_with($method, 'get')) {
            if (mb_strlen($method) > 3) {
                return $this->getExtraFieldByName(Str::asSnakeCase(mb_substr($method, 3)));
            }
        }

        if (str_starts_with($method, 'set')) {
            if (mb_strlen($method) > 3) {
                $this->setExtraFieldByName(Str::asSnakeCase(mb_substr($method, 3)), $arguments[0]);

                return $this;
            }
        }

        throw new BadMethodCallException("Undefined method '$method'. The method name must start with " . 'either findBy, findOneBy or countBy!');
    }

    public function getExtraFieldByName(?string $fieldName = '')
    {
        $extras = $this->getExtras();

        if (isset($extras[StringUtility::asLowerCamelCase($fieldName) . StringUtility::asClassName(ApplicationUtility::locale())])) {
            return $extras[StringUtility::asLowerCamelCase($fieldName) . StringUtility::asClassName(ApplicationUtility::locale())];
        }

        return $extras[StringUtility::asLowerCamelCase($fieldName)] ?? null;
    }

    public function getExtras(): ?array
    {
        return $this->extras;
    }

    public function setExtras(?array $extras): self
    {
        $this->extras = $extras ?? [];

        return $this;
    }

    public function setExtraFieldByName(?string $fieldName = '', $extraField = []): self
    {
        $extras = $this->getExtras();

        if (isset($extras[StringUtility::asLowerCamelCase($fieldName) . StringUtility::asClassName(ApplicationUtility::locale())])) {
            $extras[StringUtility::asLowerCamelCase($fieldName) . StringUtility::asClassName(ApplicationUtility::locale())] =
                $extraField;
        } else {
            $extras[StringUtility::asLowerCamelCase($fieldName)] = $extraField;
        }

        $this->setExtras($extras);

        return $this;
    }

    public function hasField(?string $fieldName): bool
    {
        foreach ($this->getExtras() as $name => $extraField) {
            if (
                $name === StringUtility::asLowerCamelCase($fieldName)
                || $name === StringUtility::asLowerCamelCase($fieldName) . StringUtility::asClassName(ApplicationUtility::locale())
            ) {
                return true;
            }
        }

        return false;
    }

    public function getTranslatedExtraFieldByName(?string $fieldName = '', $locale = null)
    {
        return $this->getExtraFieldByName(
            $fieldName . StringUtility::asClassName($locale ?? ApplicationUtility::locale())
        );
    }

    public function setTranslatedExtraFieldByName(?string $fieldName = '', $extraField = [], $locale = null): self
    {
        return $this->setExtraFieldByName(
            $fieldName . StringUtility::asClassName($locale ?? ApplicationUtility::locale()),
            $extraField
        );
    }
}
