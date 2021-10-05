<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait DescriptionTrait
{
    protected ?string $description = null;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
