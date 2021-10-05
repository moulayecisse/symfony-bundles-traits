<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Boolean;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait ExcludeSaleItemsTrait
{
    #[ORM\Column(type: Types::BOOLEAN, unique: false, nullable: false)]
    protected bool $excludeSaleItems = false;

    public function getExcludeSaleItems(): bool
    {
        return $this->excludeSaleItems;
    }

    public function setExcludeSaleItems(bool $excludeSaleItems): self
    {
        $this->excludeSaleItems = $excludeSaleItems;

        return $this;
    }
}