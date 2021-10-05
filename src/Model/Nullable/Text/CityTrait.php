<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait CityTrait
{
    protected ?string $city = null;

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }
}
