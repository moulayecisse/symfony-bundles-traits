<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait StockTrait
{
    protected int $stock;

    public function getStock(): int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }
}
