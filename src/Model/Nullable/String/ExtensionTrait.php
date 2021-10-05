<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait ExtensionTrait
{
    protected ?string $extension = null;

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(?string $extension): self
    {
        $this->extension = $extension;

        return $this;
    }
}
