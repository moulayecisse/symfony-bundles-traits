<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Date;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait ReturnDateTrait
{
    #[ORM\Column(type: Types::DATE_MUTABLE, unique: true, nullable: true)]
    protected ?DateTime $returnDate;

    public function getReturnDate(): ?DateTime
    {
        return $this->returnDate;
    }

    public function setReturnDate(?DateTime $returnDate): self
    {
        $this->returnDate = $returnDate;

        return $this;
    }
}
