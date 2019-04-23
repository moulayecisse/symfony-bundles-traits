<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait DeviceTrait
{
    /**
     * Device
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, unique=false)
     * @Assert\Type(type="string")
     * @Assert\NotNull()
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
