<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime;

use DateTime;

trait EndDateTimeTrait
{
    protected DateTime $endDateTime;

    public function __construct()
    {
        $this->setEndDateTime(new DateTime());
    }

    public function getEndDateTime(): DateTime
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(DateTime $endDateTime): self
    {
        $this->endDateTime = $endDateTime;

        return $this;
    }
}
