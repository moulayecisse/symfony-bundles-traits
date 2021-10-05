<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait BirthDateTrait
{
    /**
     * @ORM\Column(type="date", unique=false, nullable=true)
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
