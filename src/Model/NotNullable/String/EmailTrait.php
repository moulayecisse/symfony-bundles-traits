<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait EmailTrait
{
    protected string $email;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
