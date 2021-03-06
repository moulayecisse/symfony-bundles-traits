<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\String;

trait PasswordTrait
{
    /**
     * Name
     *
     * @var string
     */
    protected $password;

    /**
     * Set password
     *
     * @param  string $password
     * @return self
     */
    public function setPassword(?string $password) : self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string|null
     */
    public function getPassword() : ?string
    {
        return $this->password;
    }
}
