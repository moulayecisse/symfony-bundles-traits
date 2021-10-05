<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait CurrencyTrait
{
    protected ?string $currency = null;

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }
}
