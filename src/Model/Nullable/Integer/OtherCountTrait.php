<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait OtherCountTrait
{
    protected ?int $otherCount = null;

    public function getOtherCount(): ?int
    {
        return $this->otherCount;
    }

    public function setOtherCount(int $otherCount): self
    {
        $this->otherCount = $otherCount;

        return $this;
    }
}
