<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\String;

trait DeviceTrait
{
    /**
     * Device
     *
     * @var string
     */
    protected $device;

    /**
     * Set device
     *
     * @param  string $device
     * @return self
     */
    public function setDevice(?string $device) : self
    {
        $this->device = $device;

        return $this;
    }

    /**
     * Get device
     *
     * @return string|null
     */
    public function getDevice() : ?string
    {
        return $this->device;
    }
}
