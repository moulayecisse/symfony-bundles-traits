<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean;

trait IsVisibleTrait
{
    protected ?bool $isVisible = false;

    public function getIsVisible(): ?bool
    {
        return $this->isVisible;
    }

    public function setIsVisible(?bool $isVisible): self
    {
        $this->isVisible = $isVisible;

        return $this;
    }
}
