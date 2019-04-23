<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\String;

trait StatusTrait
{
    /**
     * Status
     *
     * @var string
     */
    protected $status;

    /**
     * Set status
     *
     * @param  string $status
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
}
