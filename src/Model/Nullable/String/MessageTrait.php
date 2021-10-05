<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait MessageTrait
{
    protected ?string $message = null;

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
