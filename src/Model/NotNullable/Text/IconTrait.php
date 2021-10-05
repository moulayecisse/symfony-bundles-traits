<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait IconTrait
{
    protected string $icon;

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }
}
