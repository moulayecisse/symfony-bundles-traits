<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait ValueTrait
{
    protected ?string $value = null;

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
