<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait PhoneNumberTrait
{
    protected ?string $phoneNumber = null;

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}
