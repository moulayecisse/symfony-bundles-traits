<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Time;

use DateTime;

trait ClosingTimeTrait
{
    protected DateTime $closingTime;

    public function getClosingTime(): DateTime
    {
        return $this->closingTime;
    }

    public function setClosingTime(DateTime $closingTime): self
    {
        $this->closingTime = $closingTime;

        return $this;
    }
}
