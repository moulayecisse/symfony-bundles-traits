<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait IsbnTrait
{
    protected string $isbn;

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }
}
