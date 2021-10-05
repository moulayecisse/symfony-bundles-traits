<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Time;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait OpeningTimeTrait
{
    /**
     * @ORM\Column(type="time", unique=false, nullable=false)
     */
    protected DateTime $openingTime;

    public function getOpeningTime(): DateTime
    {
        return $this->openingTime;
    }

    public function setOpeningTime(DateTime $openingTime): self
    {
        $this->openingTime = $openingTime;

        return $this;
    }
}
