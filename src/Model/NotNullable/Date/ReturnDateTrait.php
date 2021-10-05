<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Date;

use DateTime;

trait ReturnDateTrait
{
    protected DateTime $returnDate;

    public function getReturnDate(): DateTime
    {
        return $this->returnDate;
    }

    public function setReturnDate(DateTime $returnDate): self
    {
        $this->returnDate = $returnDate;

        return $this;
    }
}
