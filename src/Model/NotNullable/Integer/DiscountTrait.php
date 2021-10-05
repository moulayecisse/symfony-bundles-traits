<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait DiscountTrait
{
    protected int $discount;

    public function getDiscount(): int
    {
        return $this->discount ?? 1;
    }

    public function setDiscount(int $discount): self
    {
        $this->discount = $discount;

        return $this;
    }
}
