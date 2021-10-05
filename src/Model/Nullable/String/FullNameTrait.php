<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait FullNameTrait
{
    protected ?string $fullName = null;

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }
}
