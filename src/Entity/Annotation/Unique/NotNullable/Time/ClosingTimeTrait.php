<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Time;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait ClosingTimeTrait
{
    /**
     * @ORM\Column(type="time", unique=true, nullable=false)
     */
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
