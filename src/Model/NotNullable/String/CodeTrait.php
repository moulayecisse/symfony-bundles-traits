<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait CodeTrait
{
    protected string $code;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
