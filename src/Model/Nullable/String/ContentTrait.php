<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait ContentTrait
{
    protected ?string $content = null;

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
