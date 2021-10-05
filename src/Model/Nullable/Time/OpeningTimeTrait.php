<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Time;

use DateTime;

trait OpeningTimeTrait
{
    protected DateTime $openingTime;

    public function getOpeningTime(): DateTime
    {
        return $this->openingTime;
    }

    public function setOpeningTime(DateTime $openingTime): self
    {
        $this->openingTime = $openingTime;

        return $this;
    }
}
