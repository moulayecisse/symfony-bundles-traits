<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait LocaleTrait
{
    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $locale = 'fr';

    public function getLocale(): string
    {
        return $this->locale ?? 'fr';
    }

    public function setLocale(string $locale = 'fr'): self
    {
        $this->locale = $locale ?? 'fr';

        return $this;
    }
}
