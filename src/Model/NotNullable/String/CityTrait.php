<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait CityTrait
{
    protected string $city;

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }
}
