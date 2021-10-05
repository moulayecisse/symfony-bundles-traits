<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait ShippingTotalTrait
{
    /**
     * @ORM\Column(type="integer", unique=false, nullable=true)
     */
    protected ?int $shippingTotal;

    public function getShippingTotal(): ?int
    {
        return $this->shippingTotal ?? 1;
    }

    public function setShippingTotal(?int $shippingTotal): self
    {
        $this->shippingTotal = $shippingTotal;

        return $this;
    }
}
