<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait NamespaceTrait
{
    protected ?string $namespace = null;

    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    public function setNamespace(?string $namespace): self
    {
        $this->namespace = $namespace;

        return $this;
    }
}
