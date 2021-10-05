<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait NameTrait
{
    protected ?string $name = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
