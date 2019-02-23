<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\NotUnique\Nullable\String;

trait CountryTrait
{
    /**
     * Country
     *
     * @var string
     */
    protected $country;

    /**
     * Set country
     *
     * @param  string $country
     * @return self
     */
    public function setCountry(?string $country) : self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
}
