<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\String;

trait CodeTrait
{
    /**
     * Code
     *
     * @var string
     */
    protected $code;

    /**
     * Set code
     *
     * @param  string $code
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
}
