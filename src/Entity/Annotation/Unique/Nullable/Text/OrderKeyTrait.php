<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait OrderKeyTrait
{
    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
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
