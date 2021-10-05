<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait StockStatusTrait
{
    protected string $stockStatus = 'draft';

    public function getStockStatus(): string
    {
        return $this->stockStatus;
    }

    public function setStockStatus(string $stockStatus): self
    {
        $this->stockStatus = $stockStatus;

        return $this;
    }
}
