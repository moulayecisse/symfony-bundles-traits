<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait AppVersionTrait
{
    protected string $appVersion;

    public function getAppVersion(): string
    {
        return $this->appVersion;
    }

    public function setAppVersion(string $appVersion): self
    {
        $this->appVersion = $appVersion;

        return $this;
    }
}
