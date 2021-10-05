<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait LocaleTrait
{
    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
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
