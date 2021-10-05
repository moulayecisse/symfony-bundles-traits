<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait SlugTrait
{
    protected string $slug;

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}
