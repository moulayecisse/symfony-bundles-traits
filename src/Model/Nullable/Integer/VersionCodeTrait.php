<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait VersionCodeTrait
{
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
