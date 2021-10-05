<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait StockStatusTrait
{
    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $stockStatus = 'draft';

    public function getStockStatus(): ?string
    {
        return $this->stockStatus;
    }

    public function setStockStatus(?string $stockStatus): self
    {
        $this->stockStatus = $stockStatus;

        return $this;
    }
}
