<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait StockStatusTrait
{
    protected ?string $stockStatus = 'draft';

    public function getStockStatus(): ?string
    {
        return $this->stockStatus;
    }

    public function setStockStatus(?string $stockStatus): self
    {
        $this->stockStatus = $stockStatus;

        return $this;
    }
}
