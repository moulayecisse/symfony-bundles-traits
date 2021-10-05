<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Date;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait ReturnDateTrait
{
    #[ORM\Column(type: Types::DATE_MUTABLE, unique: false, nullable: false)]
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
