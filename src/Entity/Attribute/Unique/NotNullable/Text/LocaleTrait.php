<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait LocaleTrait
{
    #[ORM\Column(type: Types::TEXT, unique: true, nullable: false)]
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
