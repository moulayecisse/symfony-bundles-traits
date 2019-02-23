<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\NotUnique\Nullable\String;

trait CityTrait
{
    /**
     * City
     *
     * @var string
     */
    protected $city;

    /**
     * Set city
     *
     * @param  string $city
     * @return self
     */
    public function setCity(?string $city) : self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
}
