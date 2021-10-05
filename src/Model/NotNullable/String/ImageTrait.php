<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait ImageTrait
{
    protected string $image;

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
