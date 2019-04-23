<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\Text;

trait RegistrationIdTrait
{
    /**
     * RegistrationId
     *
     * @var string
     */
    protected $registrationId;

    /**
     * Set registrationId
     *
     * @param  string $registrationId
     * @return self
     */
    public function setRegistrationId(?string $registrationId) : self
    {
        $this->registrationId = $registrationId;

        return $this;
    }

    /**
     * Get registrationId
     *
     * @return string|null
     */
    public function getRegistrationId() : ?string
    {
        return $this->registrationId;
    }
}
