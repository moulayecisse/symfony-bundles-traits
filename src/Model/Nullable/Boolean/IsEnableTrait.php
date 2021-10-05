<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean;

trait IsEnableTrait
{
    protected ?bool $isEnable = false;

    public function getIsEnable(): ?bool
    {
        return $this->isEnable;
    }

    public function setIsEnable(?bool $isEnable): self
    {
        $this->isEnable = $isEnable;

        return $this;
    }
}
