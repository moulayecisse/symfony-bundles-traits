<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait BiographyTrait
{
    protected string $biography;

    public function getBiography(): string
    {
        return $this->biography;
    }

    public function setBiography(string $biography): self
    {
        $this->biography = $biography;

        return $this;
    }
}
