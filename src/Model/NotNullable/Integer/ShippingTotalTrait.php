<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait ShippingTotalTrait
{
    protected int $shippingTotal;

    public function getShippingTotal(): int
    {
        return $this->shippingTotal ?? 1;
    }

    public function setShippingTotal(int $shippingTotal): self
    {
        $this->shippingTotal = $shippingTotal;

        return $this;
    }
}
