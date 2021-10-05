<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait MinimumAmountTrait
{
    protected int $minimumAmount;

    public function getMinimumAmount(): int
    {
        return $this->minimumAmount ?? 1;
    }

    public function setMinimumAmount(int $minimumAmount): self
    {
        $this->minimumAmount = $minimumAmount;

        return $this;
    }
}
