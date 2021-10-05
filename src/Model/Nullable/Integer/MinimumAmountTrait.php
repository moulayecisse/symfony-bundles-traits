<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait MinimumAmountTrait
{
    protected ?int $minimumAmount = null;

    public function getMinimumAmount(): ?int
    {
        return $this->minimumAmount ?? 1;
    }

    public function setMinimumAmount(?int $minimumAmount): self
    {
        $this->minimumAmount = $minimumAmount;

        return $this;
    }
}
