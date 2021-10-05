<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait RibTrait
{
    protected string $rib;

    public function getRib(): string
    {
        return $this->rib;
    }

    public function setRib(string $rib): self
    {
        $this->rib = $rib;

        return $this;
    }
}
