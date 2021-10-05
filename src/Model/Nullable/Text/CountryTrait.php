<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait CountryTrait
{
    protected ?string $country = null;

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }
}
