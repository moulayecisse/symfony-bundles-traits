<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait AddressTrait
{
    protected ?string $address = null;

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }
}
