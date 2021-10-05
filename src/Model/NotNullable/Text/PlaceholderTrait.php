<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait PlaceholderTrait
{
    protected string $placeholder;

    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    public function setPlaceholder(string $placeholder): self
    {
        $this->placeholder = $placeholder;

        return $this;
    }
}
