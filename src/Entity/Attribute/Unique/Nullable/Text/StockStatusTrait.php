<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait StockStatusTrait
{
    #[ORM\Column(type: Types::TEXT, unique: true, nullable: true)]
    protected ?string $stockStatus;

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
