<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait OsVersionTrait
{
    #[ORM\Column(type: Types::TEXT, unique: true, nullable: false)]
    protected string $osVersion;

    public function getOsVersion(): string
    {
        return $this->osVersion;
    }

    public function setOsVersion(string $osVersion): self
    {
        $this->osVersion = $osVersion;

        return $this;
    }
}
