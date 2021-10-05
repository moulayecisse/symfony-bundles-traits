<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

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
