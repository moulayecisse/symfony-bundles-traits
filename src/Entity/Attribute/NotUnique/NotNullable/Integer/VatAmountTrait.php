<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait VatAmountTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: false, nullable: false)]
    protected int $vatAmount;

    public function getVatAmount(): int
    {
        return $this->vatAmount ?? 1;
    }

    public function setVatAmount(int $vatAmount): self
    {
        $this->vatAmount = $vatAmount;

        return $this;
    }
}
