<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait RankTrait
{
    protected int $rank;

    public function getRank(): int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }
}
