<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean;

trait IsDraftTrait
{
    protected ?bool $isDraft = false;

    public function getIsDraft(): ?bool
    {
        return $this->isDraft;
    }

    public function setIsDraft(?bool $isDraft): self
    {
        $this->isDraft = $isDraft;

        return $this;
    }
}
