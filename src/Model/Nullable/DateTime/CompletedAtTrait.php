<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime;

use DateTime;

trait CompletedAtTrait
{
    protected ?DateTime $completedAt = null;

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
