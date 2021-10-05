<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Json;

trait ValueTrait
{
    protected mixed $value = null;

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
