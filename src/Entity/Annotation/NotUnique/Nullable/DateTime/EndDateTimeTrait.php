<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait EndDateTimeTrait
{
    /**
     * @ORM\Column(type="datetime", unique=false, nullable=true)
     */
    protected ?DateTime $endDateTime;

    public function getEndDateTime(): ?DateTime
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?DateTime $endDateTime): self
    {
        $this->endDateTime = $endDateTime;

        return $this;
    }
}
