<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait MaximumAmountTrait
{
    protected int $maximumAmount;

    public function getMaximumAmount(): int
    {
        return $this->maximumAmount ?? 1;
    }

    public function setMaximumAmount(int $maximumAmount): self
    {
        $this->maximumAmount = $maximumAmount;

        return $this;
    }
}
