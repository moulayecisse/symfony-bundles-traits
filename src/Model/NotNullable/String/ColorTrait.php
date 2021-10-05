<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait ColorTrait
{
    protected string $Color;

    public function getColor(): string
    {
        return $this->Color;
    }

    public function setColor(string $Color): self
    {
        $this->Color = $Color;

        return $this;
    }
}
