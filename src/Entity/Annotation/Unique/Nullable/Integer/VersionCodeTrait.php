<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait VersionCodeTrait
{
    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
     */
    protected ?int $versionCode;

    public function getVersionCode(): ?int
    {
        return $this->versionCode;
    }

    public function setVersionCode(?int $versionCode): self
    {
        $this->versionCode = $versionCode;

        return $this;
    }
}
