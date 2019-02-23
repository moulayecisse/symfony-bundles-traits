<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\NotUnique\Nullable\String;

trait LastNameTrait
{
    /**
     * Name
     *
     * @var string
     */
    protected $lastName;

    /**
     * Set lastName
     *
     * @param  string $lastName
     * @return self
     */
    public function setLastName(?string $lastName) : self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
}
