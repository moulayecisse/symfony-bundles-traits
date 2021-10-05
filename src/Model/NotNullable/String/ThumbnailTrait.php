<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait ThumbnailTrait
{
    protected string $thumbnail;

    public function getThumbnail(): string
    {
        return $this->thumbnail;
    }

    public function setThumbnail(string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }
}
