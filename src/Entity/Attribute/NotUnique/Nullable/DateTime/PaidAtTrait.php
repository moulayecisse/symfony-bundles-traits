<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\DateTime;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait PaidAtTrait
{
    #[ORM\Column(type: Types::DATETIME_MUTABLE, unique: false, nullable: true)]
    protected ?DateTime $paidAt;

    public function getPaidAt(): ?DateTime
    {
        return $this->paidAt;
    }

    public function setPaidAt(DateTime $paidAt): self
    {
        $this->paidAt = $paidAt;

        return $this;
    }
}