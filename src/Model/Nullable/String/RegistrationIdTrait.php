<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait RegistrationIdTrait
{
    protected ?string $registrationId = null;

    public function getRegistrationId(): ?string
    {
        return $this->registrationId;
    }

    public function setRegistrationId(?string $registrationId): self
    {
        $this->registrationId = $registrationId;

        return $this;
    }
}
