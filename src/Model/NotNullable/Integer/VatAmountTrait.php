<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait VatAmountTrait
{
    protected int $vatAmount;

    public function getVatAmount(): int
    {
        return $this->vatAmount ?? 1;
    }

    public function setVatAmount(int $vatAmount): self
    {
        $this->vatAmount = $vatAmount;

        return $this;
    }
}
