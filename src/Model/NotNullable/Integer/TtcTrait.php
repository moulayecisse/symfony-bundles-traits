<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait TtcTrait
{
    protected int $ttc;

    public function getTtc(): int
    {
        return $this->ttc ?? 1;
    }

    public function setTtc(int $ttc): self
    {
        $this->ttc = $ttc;

        return $this;
    }
}
