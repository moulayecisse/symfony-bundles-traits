<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait DateTrait
{
    /**
     * @ORM\Column(type="datetime", unique=false, nullable=false)
     */
    protected ?DateTime $date;

    public function getDate(): ?DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }
}
