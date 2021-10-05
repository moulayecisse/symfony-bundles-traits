<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait TaxTotalTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: false, nullable: true)]
    protected ?int $taxTotal;

    public function getTaxTotal(): ?int
    {
        return $this->taxTotal;
    }

    public function setTaxTotal(?int $taxTotal): self
    {
        $this->taxTotal = $taxTotal;

        return $this;
    }
}
