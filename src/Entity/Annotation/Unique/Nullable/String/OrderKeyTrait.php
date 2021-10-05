<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait OrderKeyTrait
{
    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=true)
     */
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
