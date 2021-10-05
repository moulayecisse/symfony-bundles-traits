<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait TitleTrait
{
    protected string $title;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
