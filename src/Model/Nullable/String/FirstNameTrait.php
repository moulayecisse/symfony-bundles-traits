<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait FirstNameTrait
{
    protected ?string $firstName = null;

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }
}
