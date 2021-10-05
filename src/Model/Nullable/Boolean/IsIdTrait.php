<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean;

trait IsIdTrait
{
    protected ?bool $isId = false;

    public function getIsId(): ?bool
    {
        return $this->isId;
    }

    public function setIsId(?bool $isId): self
    {
        $this->isId = $isId;

        return $this;
    }
}
