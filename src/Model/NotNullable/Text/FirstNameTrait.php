<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait FirstNameTrait
{
    protected string $firstName;

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }
}
