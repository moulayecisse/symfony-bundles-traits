<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\DateTime;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait CompletedAtTrait
{
    #[ORM\Column(type: Types::DATETIME_MUTABLE, unique: true, nullable: true)]
    protected ?DateTime $completedAt = null;

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
