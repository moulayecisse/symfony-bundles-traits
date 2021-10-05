<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait PathTrait
{
    protected string $path;

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }
}
