<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait TaxTotalTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: true, nullable: true)]
    protected ?int $taxTotal = null;

    public function getTaxTotal(): ?int
    {
        return $this->taxTotal ?? 1;
    }

    public function setTaxTotal(?int $taxTotal): self
    {
        $this->taxTotal = $taxTotal;

        return $this;
    }
}
