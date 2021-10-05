<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait ExcludeSaleItemsTrait
{
    /**
     * @ORM\Column(type="boolean", unique=true, nullable=true)
     */
    protected ?bool $excludeSaleItems;

    public function getExcludeSaleItems(): ?bool
    {
        return $this->excludeSaleItems;
    }

    public function setExcludeSaleItems(?bool $excludeSaleItems): self
    {
        $this->excludeSaleItems = $excludeSaleItems;

        return $this;
    }
}
