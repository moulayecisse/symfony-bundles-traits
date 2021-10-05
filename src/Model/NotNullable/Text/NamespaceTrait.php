<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait NamespaceTrait
{
    protected string $namespace;

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function setNamespace(string $namespace): self
    {
        $this->namespace = $namespace;

        return $this;
    }
}
