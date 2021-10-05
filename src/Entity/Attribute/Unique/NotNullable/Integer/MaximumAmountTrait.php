<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait MaximumAmountTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: true, nullable: false)]
    protected int $maximumAmount;

    public function getMaximumAmount(): int
    {
        return $this->maximumAmount ?? 1;
    }

    public function setMaximumAmount(int $maximumAmount): self
    {
        $this->maximumAmount = $maximumAmount;

        return $this;
    }
}
