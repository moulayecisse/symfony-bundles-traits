<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime;

use DateTime;

trait PaidAtTrait
{
    protected ?DateTime $paidAt;

    public function getPaidAt(): ?DateTime
    {
        return $this->paidAt;
    }

    public function setPaidAt(DateTime $paidAt): self
    {
        $this->paidAt = $paidAt;

        return $this;
    }
}
