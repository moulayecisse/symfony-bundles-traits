<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait NumberTrait
{
    protected int $number;

    public function getNumber(): int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }
}
