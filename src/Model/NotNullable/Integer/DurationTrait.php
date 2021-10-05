<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait DurationTrait
{
    protected int $duration;

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }
}
