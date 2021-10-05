<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait SubTotalTrait
{
    protected ?int $subTotal = null;

    public function getSubTotal(): ?int
    {
        return $this->subTotal ?? 1;
    }

    public function setSubTotal(?int $subTotal): self
    {
        $this->subTotal = $subTotal;

        return $this;
    }
}
