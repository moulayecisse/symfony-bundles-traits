<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait VersionNameTrait
{
    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=true)
     */
    protected ?string $versionName;

    public function getVersionName(): ?string
    {
        return $this->versionName;
    }

    public function setVersionName(?string $versionName): self
    {
        $this->versionName = $versionName;

        return $this;
    }
}
