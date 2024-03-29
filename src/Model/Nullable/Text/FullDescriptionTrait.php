<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait FullDescriptionTrait
{
    protected string $fullDescription;

    public function getFullDescription(): string
    {
        return $this->fullDescription;
    }

    public function setFullDescription(string $fullDescription): self
    {
        $this->fullDescription = $fullDescription;

        return $this;
    }
}
