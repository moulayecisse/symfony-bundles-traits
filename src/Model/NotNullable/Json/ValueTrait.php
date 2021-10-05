<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Json;

trait ValueTrait
{
    protected mixed $value;

    public function getValue(): mixed
    {
        return json_decode($this->value);
    }

    public function setValue(mixed $value): self
    {
        $this->value = json_encode($value);

        return $this;
    }
}
