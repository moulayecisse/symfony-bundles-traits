<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait OtherCountTrait
{
    protected int $otherCount;

    public function getOtherCount(): int
    {
        return $this->otherCount;
    }

    public function setOtherCount(int $otherCount): self
    {
        $this->otherCount = $otherCount;

        return $this;
    }
}
