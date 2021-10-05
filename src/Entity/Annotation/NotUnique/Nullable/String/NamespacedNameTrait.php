<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait NamespacedNameTrait
{
    /**
     * @ORM\Column(type="string", length=255, unique=false, nullable=false)
     */
    protected string $namespacedName;

    public function getNamespacedName(): string
    {
        return $this->namespacedName;
    }

    public function setNamespacedName(string $namespacedName): self
    {
        $this->namespacedName = $namespacedName;

        return $this;
    }
}
