<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\String;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait OsVersionTrait
{
    #[ORM\Column(type: Types::STRING, length: 255, unique: true, nullable: true)]
    protected ?string $osVersion = null;

    public function getOsVersion(): ?string
    {
        return $this->osVersion;
    }

    public function setOsVersion(?string $osVersion): self
    {
        $this->osVersion = $osVersion;

        return $this;
    }
}
