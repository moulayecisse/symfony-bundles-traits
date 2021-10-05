<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait DiscountTotalTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: false, nullable: true)]
    protected ?int $discountTotal = null;

    public function getDiscountTotal(): ?int
    {
        return $this->discountTotal ?? 1;
    }

    public function setDiscountTotal(?int $discountTotal): self
    {
        $this->discountTotal = $discountTotal;

        return $this;
    }
}
