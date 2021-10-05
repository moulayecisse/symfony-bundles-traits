<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait MinimumAmountTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: true, nullable: true)]
    protected ?int $minimumAmount;

    public function getMinimumAmount(): ?int
    {
        return $this->minimumAmount;
    }

    public function setMinimumAmount(?int $minimumAmount): self
    {
        $this->minimumAmount = $minimumAmount;

        return $this;
    }
}
