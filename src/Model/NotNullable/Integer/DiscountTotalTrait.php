<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait DiscountTotalTrait
{
    protected int $discountTotal;

    public function getDiscountTotal(): int
    {
        return $this->discountTotal ?? 1;
    }

    public function setDiscountTotal(int $discountTotal): self
    {
        $this->discountTotal = $discountTotal;

        return $this;
    }
}
