<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait ThumbnailTrait
{
    protected ?string $thumbnail = null;

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    public function setThumbnail(?string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }
}
