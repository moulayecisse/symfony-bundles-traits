<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean;

trait EnableFreeShippingTrait
{
    protected ?bool $enableFreeShipping = false;

    public function getEnableFreeShipping(): ?bool
    {
        return $this->enableFreeShipping;
    }

    public function setEnableFreeShipping(?bool $enableFreeShipping): self
    {
        $this->enableFreeShipping = $enableFreeShipping;

        return $this;
    }
}
