<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait OrderKeyTrait
{
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
