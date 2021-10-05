<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait DiscountTotalTrait
{
    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected int $discountTotal;

    public function getDiscountTotal(): int
    {
        return $this->discountTotal ?? 1;
    }

    public function setDiscountTotal(int $discountTotal): self
    {
        $this->discountTotal = $discountTotal;

        return $this;
    }
}
