<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Date;

use DateTime;

trait EndDateTrait
{
    protected ?DateTime $endDate;

    public function getEndDate(): ?DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(?DateTime $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }
}
