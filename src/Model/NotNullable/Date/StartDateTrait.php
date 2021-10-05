<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Date;

use DateTime;

trait StartDateTrait
{
    protected DateTime $startDate;

    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(DateTime $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }
}
