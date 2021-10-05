<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait VatTrait
{
    protected ?int $vat = null;

    public function getVat(): ?int
    {
        return $this->vat ?? 1;
    }

    public function setVat(?int $vat): self
    {
        $this->vat = $vat;

        return $this;
    }
}
