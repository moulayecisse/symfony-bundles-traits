<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait PhoneTrait
{
    protected string $phone;

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
}
