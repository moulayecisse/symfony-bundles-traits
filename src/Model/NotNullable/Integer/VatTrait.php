<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait VatTrait
{
    protected int $vat;

    public function getVat(): int
    {
        return $this->vat ?? 1;
    }

    public function setVat(int $vat): self
    {
        $this->vat = $vat;

        return $this;
    }
}
