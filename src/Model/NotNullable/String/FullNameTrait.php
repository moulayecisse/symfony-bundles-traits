<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait FullNameTrait
{
    protected string $fullName;

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }
}
