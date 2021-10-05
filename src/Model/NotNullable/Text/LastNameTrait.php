<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait LastNameTrait
{
    protected string $lastName;

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }
}
