<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait NumberTrait
{
    protected ?int $number = null;

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }
}
