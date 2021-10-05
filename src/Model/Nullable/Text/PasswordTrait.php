<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait PasswordTrait
{
    protected ?string $password = null;

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
