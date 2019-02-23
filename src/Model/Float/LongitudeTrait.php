<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\Float;

trait LongitudeTrait
{
    /**
     * Longitude
     *
     * @var float|null
     */
    protected $longitude;

    /**
     * Set longitude
     *
     * @param  float|null $longitude
     * @return self
     */
    public function setLongitude(?float $longitude) : self
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float|null
     */
    public function getLongitude() : ?float
    {
        return $this->longitude;
    }
}
