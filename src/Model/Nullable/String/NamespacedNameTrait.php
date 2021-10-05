<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait NamespacedNameTrait
{
    protected ?string $namespacedName = null;

    public function getNamespacedName(): ?string
    {
        return $this->namespacedName;
    }

    public function setNamespacedName(?string $namespacedName): self
    {
        $this->namespacedName = $namespacedName;

        return $this;
    }
}
