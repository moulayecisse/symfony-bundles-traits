<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait NameTrait
{
    protected string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
