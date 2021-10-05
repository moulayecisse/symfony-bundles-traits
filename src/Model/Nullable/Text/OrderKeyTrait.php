<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait OrderKeyTrait
{
    protected ?string $orderKey = null;

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
