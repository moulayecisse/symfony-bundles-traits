<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait OrderingTrait
{
    protected int $ordering;

    public function getOrdering(): int
    {
        return $this->ordering;
    }

    public function setOrdering(int $ordering): self
    {
        $this->ordering = $ordering;

        return $this;
    }
}
