<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait MaximumAmountTrait
{
    protected ?int $maximumAmount = null;

    public function getMaximumAmount(): ?int
    {
        return $this->maximumAmount ?? 1;
    }

    public function setMaximumAmount(?int $maximumAmount): self
    {
        $this->maximumAmount = $maximumAmount;

        return $this;
    }
}
