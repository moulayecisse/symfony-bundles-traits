<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait LinkTrait
{
    protected string $link;

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }
}
