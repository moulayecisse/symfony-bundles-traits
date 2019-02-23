<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\String;

trait TypeTrait
{
    /**
     * Type
     *
     * @var string
     */
    protected $type;

    /**
     * Set type
     *
     * @param  string $type
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string|null
     */
    public function getType() : string
    {
        return $this->type;
    }
}
