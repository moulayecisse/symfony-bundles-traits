<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait TotalTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: false, nullable: false)]
    protected int $total;

    public function getTotal(): int
    {
        return $this->total ?? 1;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }
}
