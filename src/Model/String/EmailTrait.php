<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\NotUnique\Nullable\String;

trait EmailTrait
{
    /**
     * Name
     *
     * @var string
     */
    protected $email;

    /**
     * Set email
     *
     * @param  string $email
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
}
