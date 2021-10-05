<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\String;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait VersionNameTrait
{
    #[ORM\Column(type: Types::STRING, length: 255, unique: true, nullable: true)]
    protected string $versionName;

    public function getVersionName(): string
    {
        return $this->versionName;
    }

    public function setVersionName(string $versionName): self
    {
        $this->versionName = $versionName;

        return $this;
    }
}
