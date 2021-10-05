<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait IbanTrait
{
    protected string $iban;

    public function getIban(): string
    {
        return $this->iban;
    }

    public function setIban(string $iban): self
    {
        $this->iban = $iban;

        return $this;
    }
}
