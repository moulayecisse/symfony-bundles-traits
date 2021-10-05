<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait FloorTrait
{
    protected int $floor;

    public function getFloor(): int
    {
        return $this->floor;
    }

    public function setFloor(int $floor): self
    {
        $this->floor = $floor;

        return $this;
    }
}
