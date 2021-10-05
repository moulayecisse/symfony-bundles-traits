<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait DeviceNameTrait
{
    protected ?string $deviceName = null;

    public function getDeviceName(): ?string
    {
        return $this->deviceName;
    }

    public function setDeviceName(?string $deviceName): self
    {
        $this->deviceName = $deviceName;

        return $this;
    }
}
