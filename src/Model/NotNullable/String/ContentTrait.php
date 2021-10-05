<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait ContentTrait
{
    protected string $content;

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
