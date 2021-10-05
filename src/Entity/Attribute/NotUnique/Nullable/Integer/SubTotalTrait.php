<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait SubTotalTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: false, nullable: true)]
    protected ?int $subTotal = null;

    public function getSubTotal(): ?int
    {
        return $this->subTotal ?? 1;
    }

    public function setSubTotal(?int $subTotal): self
    {
        $this->subTotal = $subTotal;

        return $this;
    }
}
