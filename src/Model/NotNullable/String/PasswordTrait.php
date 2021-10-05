<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait PasswordTrait
{
    protected string $password;

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}
