<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait StockStatusTrait
{
    #[ORM\Column(type: Types::TEXT, unique: false, nullable: false)]
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