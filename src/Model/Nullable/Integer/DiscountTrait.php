<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait DiscountTrait
{
    protected ?int $discount = null;

    public function getDiscount(): ?int
    {
        return $this->discount ?? 1;
    }

    public function setDiscount(?int $discount): self
    {
        $this->discount = $discount;

        return $this;
    }
}
