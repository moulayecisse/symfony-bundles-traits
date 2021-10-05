<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait RegistrationTokenTrait
{
    protected string $registrationToken;

    public function getRegistrationToken(): string
    {
        return $this->registrationToken;
    }

    public function setRegistrationToken(string $registrationToken): self
    {
        $this->registrationToken = $registrationToken;

        return $this;
    }
}
