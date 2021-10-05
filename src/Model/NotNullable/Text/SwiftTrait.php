<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

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
