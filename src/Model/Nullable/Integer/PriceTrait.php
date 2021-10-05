<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait PriceTrait
{
    protected ?int $price = null;

    public function getPrice(): ?int
    {
        return $this->price ?? 1;
    }

    public function setPrice(?int $price): self
    {
        $this->price = $price;

        return $this;
    }
}
