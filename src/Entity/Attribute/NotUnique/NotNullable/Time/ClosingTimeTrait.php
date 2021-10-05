<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Time;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait ClosingTimeTrait
{
    #[ORM\Column(type: Types::TIME_MUTABLE, unique: false, nullable: false)]
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
