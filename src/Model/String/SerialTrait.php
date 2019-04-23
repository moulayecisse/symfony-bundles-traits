<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\String;

trait SerialTrait
{
    /**
     * Serial
     *
     * @var string
     */
    protected $serial;

    /**
     * Set serial
     *
     * @param  string $serial
     * @return self
     */
    public function setSerial(?string $serial) : self
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string|null
     */
    public function getSerial() : ?string
    {
        return $this->serial;
    }
}
