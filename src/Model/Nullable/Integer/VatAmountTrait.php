<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait VatAmountTrait
{
    protected ?int $vatAmount = null;

    public function getVatAmount(): ?int
    {
        return $this->vatAmount ?? 1;
    }

    public function setVatAmount(?int $vatAmount): self
    {
        $this->vatAmount = $vatAmount;

        return $this;
    }
}
