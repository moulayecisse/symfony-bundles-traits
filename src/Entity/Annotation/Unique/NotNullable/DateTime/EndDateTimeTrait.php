<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait EndDateTimeTrait
{
    /**
     * @ORM\Column(type="datetime", unique=true, nullable=false)
     */
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
