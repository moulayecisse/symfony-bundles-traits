<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait ValueTrait
{
    protected string $value;

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
