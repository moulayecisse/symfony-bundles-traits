<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\String;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait OrderKeyTrait
{
    #[ORM\Column(type: Types::STRING, length: 255, unique: false, nullable: false)]
    protected string $orderKey;

    public function getOrderKey(): string
    {
        return $this->orderKey;
    }

    public function setOrderKey(string $orderKey): self
    {
        $this->orderKey = $orderKey;

        return $this;
    }
}
