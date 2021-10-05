<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait QuantityTrait
{
    protected ?int $quantity = null;

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
