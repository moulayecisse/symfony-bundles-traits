<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait LocaleTrait
{
    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=true)
     */
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
