<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait DeviceTrait
{
    protected string $device;

    public function getDevice(): string
    {
        return $this->device;
    }

    public function setDevice(string $device): self
    {
        $this->device = $device;

        return $this;
    }
}
