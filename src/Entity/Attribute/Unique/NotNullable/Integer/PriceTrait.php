<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait PriceTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: true, nullable: false)]
    protected int $price;

    public function getPrice(): int
    {
        return $this->price ?? 1;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }
}
