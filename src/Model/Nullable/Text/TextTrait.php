<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait TextTrait
{
    protected ?string $text = null;

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }
}
