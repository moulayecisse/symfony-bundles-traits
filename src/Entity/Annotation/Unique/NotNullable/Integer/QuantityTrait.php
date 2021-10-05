<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait QuantityTrait
{
    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected int $quantity;

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
