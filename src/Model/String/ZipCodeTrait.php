<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\NotUnique\Nullable\String;

trait ZipCodeTrait
{
    /**
     * ZipCode
     *
     * @var string
     */
    protected $zipCode;

    /**
     * Set zipCode
     *
     * @param  string $zipCode
     * @return self
     */
    public function setZipCode(?string $zipCode) : self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string|null
     */
    public function getZipCode() : ?string
    {
        return $this->zipCode;
    }
}
