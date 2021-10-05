<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait DiscountTotalTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: true, nullable: true)]
    protected ?int $discountTotal;

    public function getDiscountTotal(): ?int
    {
        return $this->discountTotal;
    }

    public function setDiscountTotal(?int $discountTotal): self
    {
        $this->discountTotal = $discountTotal;

        return $this;
    }
}
