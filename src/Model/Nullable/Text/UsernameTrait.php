<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait UsernameTrait
{
    protected ?string $username = null;

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }
}
