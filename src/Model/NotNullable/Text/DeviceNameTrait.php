<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait DeviceNameTrait
{
    protected string $deviceName;

    public function getDeviceName(): string
    {
        return $this->deviceName;
    }

    public function setDeviceName(string $deviceName): self
    {
        $this->deviceName = $deviceName;

        return $this;
    }
}
