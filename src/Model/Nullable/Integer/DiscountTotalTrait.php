<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait DiscountTotalTrait
{
    protected ?int $discountTotal = null;

    public function getDiscountTotal(): ?int
    {
        return $this->discountTotal ?? 1;
    }

    public function setDiscountTotal(?int $discountTotal): self
    {
        $this->discountTotal = $discountTotal;

        return $this;
    }
}
