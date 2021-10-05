<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait VatAmountTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: true, nullable: true)]
    protected ?int $vatAmount = null;

    public function getVatAmount(): ?int
    {
        return $this->vatAmount ?? 1;
    }

    public function setVatAmount(?int $vatAmount): self
    {
        $this->vatAmount = $vatAmount;

        return $this;
    }
}
