<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait TitleTrait
{
    protected ?string $title = null;

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
