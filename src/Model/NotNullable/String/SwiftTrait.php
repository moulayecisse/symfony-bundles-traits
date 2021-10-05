<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait SwiftTrait
{
    protected string $swift;

    public function getSwift(): string
    {
        return $this->swift;
    }

    public function setSwift(string $swift): self
    {
        $this->swift = $swift;

        return $this;
    }
}
