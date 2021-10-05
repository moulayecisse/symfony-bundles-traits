<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Date;

use DateTime;

trait BirthDateTrait
{
    protected ?DateTime $birthDate = null;

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
