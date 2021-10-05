<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait IconTrait
{
    protected ?string $icon = null;

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }
}
