<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait PhoneNumberTrait
{
    protected string $phoneNumber;

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}
