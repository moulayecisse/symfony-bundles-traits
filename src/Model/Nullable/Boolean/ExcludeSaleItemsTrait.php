<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean;

trait ExcludeSaleItemsTrait
{
    protected ?bool $excludeSaleItems = false;

    public function getExcludeSaleItems(): ?bool
    {
        return $this->excludeSaleItems;
    }

    public function setExcludeSaleItems(?bool $excludeSaleItems): self
    {
        $this->excludeSaleItems = $excludeSaleItems;

        return $this;
    }
}
