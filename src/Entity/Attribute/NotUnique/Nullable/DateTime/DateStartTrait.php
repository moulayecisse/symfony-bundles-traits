<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\DateTime;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait DateStartTrait
{
    #[ORM\Column(type: Types::DATETIME_MUTABLE, unique: false, nullable: true)]
    protected ?DateTime $dateStart;

    public function getDateStart(): ?DateTime
    {
        return $this->dateStart;
    }

    public function setDateStart(?DateTime $dateStart): self
    {
        $this->dateStart = $dateStart;

        return $this;
    }
}
