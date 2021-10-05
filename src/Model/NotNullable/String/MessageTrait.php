<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait MessageTrait
{
    protected string $message;

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
