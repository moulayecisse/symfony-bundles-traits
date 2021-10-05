<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait ButtonTrait
{
    protected ?string $button = null;

    public function getButton(): ?string
    {
        return $this->button;
    }

    public function setButton(?string $button): self
    {
        $this->button = $button;

        return $this;
    }
}
