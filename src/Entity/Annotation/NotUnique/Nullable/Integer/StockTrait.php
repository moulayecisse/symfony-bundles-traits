<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait StockTrait
{
    /**
     * @ORM\Column(type="integer", unique=false, nullable=true)
     */
    protected ?int $stock;

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(?int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }
}
