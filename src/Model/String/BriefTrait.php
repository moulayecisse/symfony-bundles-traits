<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\String;

trait BriefTrait
{
    /**
     * Brief
     *
     * @var string
     */
    protected $brief;

    /**
     * Set brief
     *
     * @param  string $brief
     * @return self
     */
    public function setBrief(?string $brief) : self
    {
        $this->brief = $brief;

        return $this;
    }

    /**
     * Get brief
     *
     * @return string|null
     */
    public function getBrief() : ?string
    {
        return $this->brief;
    }
}
