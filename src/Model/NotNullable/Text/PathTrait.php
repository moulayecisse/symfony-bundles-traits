<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

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
