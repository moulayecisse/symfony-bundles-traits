<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait CurrencyTrait
{
    protected string $currency;

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }
}
