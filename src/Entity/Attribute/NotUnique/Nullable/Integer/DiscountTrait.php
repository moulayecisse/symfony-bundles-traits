<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait DiscountTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: false, nullable: true)]
    protected ?int $discount = null;

    public function getDiscount(): ?int
    {
        return $this->discount ?? 1;
    }

    public function setDiscount(?int $discount): self
    {
        $this->discount = $discount;

        return $this;
    }
}
