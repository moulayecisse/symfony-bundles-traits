<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait CountTrait
{
    protected ?int $count = null;

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }
}
