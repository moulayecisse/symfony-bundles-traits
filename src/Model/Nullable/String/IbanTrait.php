<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait IbanTrait
{
    protected ?string $iban = null;

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): self
    {
        $this->iban = $iban;

        return $this;
    }
}
