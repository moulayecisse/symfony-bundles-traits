<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait PlaceholderTrait
{
    protected ?string $placeholder = null;

    public function getPlaceholder(): ?string
    {
        return $this->placeholder;
    }

    public function setPlaceholder(?string $placeholder): self
    {
        $this->placeholder = $placeholder;

        return $this;
    }
}
