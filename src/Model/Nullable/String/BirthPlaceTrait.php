<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait BirthPlaceTrait
{
    protected ?string $birthPlace;

    public function getBirthPlace(): ?string
    {
        return $this->birthPlace;
    }

    public function setBirthPlace(?string $birthPlace): self
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }
}
