<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait QuantityTrait
{
    protected int $quantity;

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
