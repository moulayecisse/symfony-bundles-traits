<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait TypeTrait
{
    protected ?string $type = null;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
