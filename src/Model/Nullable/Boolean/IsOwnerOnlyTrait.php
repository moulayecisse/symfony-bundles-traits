<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean;

trait IsOwnerOnlyTrait
{
    protected ?bool $isOwnerOnly = false;

    public function getIsOwnerOnly(): ?bool
    {
        return $this->isOwnerOnly;
    }

    public function setIsOwnerOnly(?bool $isOwnerOnly): self
    {
        $this->isOwnerOnly = $isOwnerOnly;

        return $this;
    }
}
