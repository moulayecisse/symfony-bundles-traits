<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait StartDateTrait
{
    /**
     * @ORM\Column(type="date", unique=true, nullable=true)
     */
    protected ?DateTime $startDate;

    public function getStartDate(): ?DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(?DateTime $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }
}
