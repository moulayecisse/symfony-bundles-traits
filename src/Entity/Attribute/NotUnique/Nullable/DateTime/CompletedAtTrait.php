<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\DateTime;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait CompletedAtTrait
{
    #[ORM\Column(type: Types::DATETIME_MUTABLE, unique: false, nullable: true)]
    protected ?DateTime $completedAt;

    public function getCompletedAt(): ?DateTime
    {
        return $this->completedAt;
    }

    public function setCompletedAt(DateTime $completedAt): self
    {
        $this->completedAt = $completedAt;

        return $this;
    }
}
