<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait ColorTrait
{
    protected ?string $Color = null;

    public function getColor(): ?string
    {
        return $this->Color;
    }

    public function setColor(?string $Color): self
    {
        $this->Color = $Color;

        return $this;
    }
}
