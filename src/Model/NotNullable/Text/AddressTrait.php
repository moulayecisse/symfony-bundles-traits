<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait AddressTrait
{
    protected string $address;

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }
}
