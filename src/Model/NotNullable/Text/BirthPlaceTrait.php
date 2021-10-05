<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait BirthPlaceTrait
{
    protected string $birthPlace;

    public function getBirthPlace(): string
    {
        return $this->birthPlace;
    }

    public function setBirthPlace(string $birthPlace): self
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }
}
