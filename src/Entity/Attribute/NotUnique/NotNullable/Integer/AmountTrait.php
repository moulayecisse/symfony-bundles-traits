<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait AmountTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: false, nullable: false)]
    protected int $amount;

    public function getAmount(): int
    {
        return $this->amount ?? 1;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }
}
