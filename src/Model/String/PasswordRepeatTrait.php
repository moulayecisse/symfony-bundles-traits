<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\NotUnique\Nullable\String;

trait PasswordRepeatTrait
{
    /**
     * Name
     *
     * @var string
     */
    protected $passwordRepeat;

    /**
     * Set passwordRepeat
     *
     * @param  string $passwordRepeat
     * @return self
     */
    public function setPasswordRepeat(?string $passwordRepeat) : self
    {
        $this->passwordRepeat = $passwordRepeat;

        return $this;
    }

    /**
     * Get passwordRepeat
     *
     * @return string|null
     */
    public function getPasswordRepeat() : ?string
    {
        return $this->passwordRepeat;
    }
}
