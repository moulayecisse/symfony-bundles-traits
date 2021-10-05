<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait ButtonTrait
{
    protected string $button;

    public function getButton(): string
    {
        return $this->button;
    }

    public function setButton(string $button): self
    {
        $this->button = $button;

        return $this;
    }
}
