<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime;

use DateTime;

trait CompletedAtTrait
{
    protected ?DateTime $completedAt;

    public function getCompletedAt(): ?DateTime
    {
        return $this->completedAt;
    }

    public function setCompletedAt(DateTime $completedAt): self
    {
        $this->completedAt = $completedAt;

        return $this;
    }
}
