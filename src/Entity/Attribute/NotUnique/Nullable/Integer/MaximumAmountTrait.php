<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait MaximumAmountTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: false, nullable: true)]
    protected ?int $maximumAmount;

    public function getMaximumAmount(): ?int
    {
        return $this->maximumAmount;
    }

    public function setMaximumAmount(?int $maximumAmount): self
    {
        $this->maximumAmount = $maximumAmount;

        return $this;
    }
}
