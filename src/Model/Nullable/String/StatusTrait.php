<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait StatusTrait
{
    protected ?string $status = 'draft';

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
