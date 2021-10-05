<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait TotalTrait
{
    protected ?int $total = null;

    public function getTotal(): ?int
    {
        return $this->total ?? 1;
    }

    public function setTotal(?int $total): self
    {
        $this->total = $total;

        return $this;
    }
}
