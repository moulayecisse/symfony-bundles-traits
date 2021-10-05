<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait ReturnDateTrait
{
    /**
     * @ORM\Column(type="date", unique=true, nullable=false)
     */
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
