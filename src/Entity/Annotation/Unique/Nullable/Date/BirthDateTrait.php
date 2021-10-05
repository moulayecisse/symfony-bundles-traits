<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait BirthDateTrait
{
    /**
     * @ORM\Column(type="date", unique=true, nullable=true)
     */
    protected ?DateTime $birthDate;

    public function getBirthDate(): ?DateTime
    {
        return $this->birthDate;
    }

    public function setBirthDate(?DateTime $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }
}
