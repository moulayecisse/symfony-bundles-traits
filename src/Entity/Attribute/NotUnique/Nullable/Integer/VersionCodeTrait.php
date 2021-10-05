<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait VersionCodeTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: false, nullable: true)]
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
