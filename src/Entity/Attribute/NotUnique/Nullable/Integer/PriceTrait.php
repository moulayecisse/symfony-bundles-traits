<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait PriceTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: false, nullable: true)]
    protected ?int $price = null;

    public function getPrice(): ?int
    {
        return $this->price ?? 1;
    }

    public function setPrice(?int $price): self
    {
        $this->price = $price;

        return $this;
    }
}
