<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

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
