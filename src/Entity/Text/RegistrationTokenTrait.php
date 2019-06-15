<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\Text;

use Doctrine\ORM\Mapping as ORM;

trait RegistrationTokenTrait
{
    /**
     * RegistrationId
     *
     * @var string
     *
     * @ORM\Column(type="text")
     */
    protected $registrationToken;

    /**
     * Set registrationId
     *
     * @param  string $registrationToken
     * @return self
     */
    public function setRegistrationToken(string $registrationToken) : self
    {
        $this->registrationToken = $registrationToken;

        return $this;
    }

    /**
     * Get registrationId
     *
     * @return string|null
     */
    public function getRegistrationToken() : ?string
    {
        return $this->registrationToken;
    }
}
