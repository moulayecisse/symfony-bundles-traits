<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\String;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait OrderKeyTrait
{
    #[ORM\Column(type: Types::STRING, length: 255, unique: true, nullable: true)]
    protected ?string $orderKey;

    public function getOrderKey(): ?string
    {
        return $this->orderKey;
    }

    public function setOrderKey(?string $orderKey): self
    {
        $this->orderKey = $orderKey;

        return $this;
    }
}
