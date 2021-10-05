<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime;

use DateTime;

trait PaidAtTrait
{
    protected ?DateTime $paidAt = null;

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
