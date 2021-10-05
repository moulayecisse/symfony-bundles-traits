<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait RibTrait
{
    protected ?string $rib = null;

    public function getRib(): ?string
    {
        return $this->rib;
    }

    public function setRib(?string $rib): self
    {
        $this->rib = $rib;

        return $this;
    }
}
