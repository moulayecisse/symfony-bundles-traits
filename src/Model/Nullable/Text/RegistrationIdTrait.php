<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

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
