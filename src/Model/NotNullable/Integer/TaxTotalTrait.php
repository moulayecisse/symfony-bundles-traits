<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait TaxTotalTrait
{
    protected int $taxTotal;

    public function getTaxTotal(): int
    {
        return $this->taxTotal ?? 1;
    }

    public function setTaxTotal(int $taxTotal): self
    {
        $this->taxTotal = $taxTotal;

        return $this;
    }
}
