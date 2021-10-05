<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\DateTime;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait StartDateTimeTrait
{
    #[ORM\Column(type: Types::DATETIME_MUTABLE, unique: false, nullable: false)]
    protected DateTime $startDateTime;

    public function __construct()
    {
        $this->setStartDateTime(new DateTime());
    }

    public function getStartDateTime(): DateTime
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(DateTime $startDateTime): self
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }
}
