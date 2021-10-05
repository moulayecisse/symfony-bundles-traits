<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait ShippingTotalTrait
{
    protected ?int $shippingTotal = null;

    public function getShippingTotal(): ?int
    {
        return $this->shippingTotal ?? 1;
    }

    public function setShippingTotal(?int $shippingTotal): self
    {
        $this->shippingTotal = $shippingTotal;

        return $this;
    }
}
