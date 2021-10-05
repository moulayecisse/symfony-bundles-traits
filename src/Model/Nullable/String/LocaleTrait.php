<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait LocaleTrait
{
    protected ?string $locale = 'fr';

    public function getLocale(): ?string
    {
        return $this->locale ?? 'fr';
    }

    public function setLocale(?string $locale = 'fr'): self
    {
        $this->locale = $locale ?? 'fr';

        return $this;
    }
}
