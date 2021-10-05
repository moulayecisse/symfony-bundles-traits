<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Boolean;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait EnableFreeShippingTrait
{
    #[ORM\Column(type: Types::BOOLEAN, unique: true, nullable: true)]
    protected bool $enableFreeShipping = false;

    public function getEnableFreeShipping(): bool
    {
        return $this->enableFreeShipping;
    }

    public function setEnableFreeShipping(bool $enableFreeShipping): self
    {
        $this->enableFreeShipping = $enableFreeShipping;

        return $this;
    }
}
