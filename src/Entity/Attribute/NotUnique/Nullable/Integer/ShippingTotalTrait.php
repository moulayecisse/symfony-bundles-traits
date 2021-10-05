<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait ShippingTotalTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: false, nullable: true)]
    protected ?int $shippingTotal;

    public function getShippingTotal(): ?int
    {
        return $this->shippingTotal;
    }

    public function setShippingTotal(?int $shippingTotal): self
    {
        $this->shippingTotal = $shippingTotal;

        return $this;
    }
}