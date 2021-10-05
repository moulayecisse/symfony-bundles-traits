<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait LastNameTrait
{
    protected ?string $lastName = null;

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }
}
