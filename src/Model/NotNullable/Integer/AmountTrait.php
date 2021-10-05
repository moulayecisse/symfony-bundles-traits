<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait AmountTrait
{
    protected int $amount;

    public function getAmount(): int
    {
        return $this->amount ?? 1;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }
}
