<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\DateTime;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait EndDateTimeTrait
{
    #[ORM\Column(type: Types::DATETIME_MUTABLE, unique: false, nullable: false)]
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
