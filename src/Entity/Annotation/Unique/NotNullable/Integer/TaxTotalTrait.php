<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait TaxTotalTrait
{
    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected int $taxTotal;

    public function getTaxTotal(): int
    {
        return $this->taxTotal ?? 1;
    }

    public function setTaxTotal(int $taxTotal): self
    {
        $this->taxTotal = $taxTotal;

        return $this;
    }
}
