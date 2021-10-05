<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime;

use DateTime;

trait StartDateTimeTrait
{
    protected ?DateTime $startDateTime;

    public function getStartDateTime(): ?DateTime
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?DateTime $startDateTime): self
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }
}
