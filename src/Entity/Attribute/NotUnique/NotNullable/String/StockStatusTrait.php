<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\String;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait StockStatusTrait
{
    #[ORM\Column(type: Types::STRING, length: 255, unique: false, nullable: false)]
    protected string $stockStatus = 'draft';

    public function getStockStatus(): string
    {
        return $this->stockStatus;
    }

    public function setStockStatus(string $stockStatus): self
    {
        $this->stockStatus = $stockStatus;

        return $this;
    }
}
