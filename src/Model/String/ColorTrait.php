<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\String;

trait ColorTrait
{
    /**
     * Color
     *
     * @var string
     */
    protected $color;

    /**
     * Set color
     *
     * @param  string $color
     * @return self
     */
    public function setColor(?string $color) : self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string|null
     */
    public function getColor() : ?string
    {
        return $this->color;
    }
}
