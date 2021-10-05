<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait VatTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: false, nullable: false)]
    protected int $vat;

    public function getVat(): int
    {
        return $this->vat ?? 1;
    }

    public function setVat(int $vat): self
    {
        $this->vat = $vat;

        return $this;
    }
}
