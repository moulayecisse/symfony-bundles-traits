<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Date;

use DateTime;

trait BirthDateTrait
{
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
