<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait VersionNameTrait
{
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
