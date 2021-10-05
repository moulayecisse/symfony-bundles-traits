<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait VersionCodeTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: true, nullable: false)]
    protected int $versionCode;

    public function getVersionCode(): int
    {
        return $this->versionCode;
    }

    public function setVersionCode(int $versionCode): self
    {
        $this->versionCode = $versionCode;

        return $this;
    }
}
