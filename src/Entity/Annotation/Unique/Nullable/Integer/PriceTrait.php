<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait PriceTrait
{
    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
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
