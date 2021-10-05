<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Time;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait ClosingTimeTrait
{
    /**
     * @ORM\Column(type="time", unique=false, nullable=true)
     */
    protected ?DateTime $closingTime;

    public function getClosingTime(): ?DateTime
    {
        return $this->closingTime;
    }

    public function setClosingTime(?DateTime $closingTime): self
    {
        $this->closingTime = $closingTime;

        return $this;
    }
}
