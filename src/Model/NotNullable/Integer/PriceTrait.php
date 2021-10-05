<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait PriceTrait
{
    protected int $price;

    public function getPrice(): int
    {
        return $this->price ?? 1;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }
}
