<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait CountTrait
{
    protected int $count;

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }
}
