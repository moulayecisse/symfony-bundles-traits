<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait PriceTrait
{
    /**
     * @ORM\Column(type="integer", unique=false, nullable=false)
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
