<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait PathTrait
{
    protected ?string $path = null;

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }
}
