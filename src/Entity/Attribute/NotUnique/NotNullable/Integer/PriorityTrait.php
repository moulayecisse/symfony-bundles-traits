<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait PriorityTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: false, nullable: false)]
    protected int $priority;

    public function getPriority(): int
    {
        return $this->priority ?? 1;
    }

    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }
}