<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait DiscountTrait
{
    /**
     * @ORM\Column(type="integer", unique=false, nullable=false)
     */
    protected int $discount;

    public function getDiscount(): int
    {
        return $this->discount ?? 1;
    }

    public function setDiscount(int $discount): self
    {
        $this->discount = $discount;

        return $this;
    }
}
