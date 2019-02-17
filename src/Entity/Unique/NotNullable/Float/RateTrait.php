<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\Unique\NotNullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait RateTrait
{
    /**
     * Rate
     *
     * @var float
     *
     * @ORM\Column(type="float", nullable=false, unique=true)
     */
    protected $rate;

    /**
     * Set Rate
     *
     * @param  float $rate
     *
     * @return self
     */
    public function setRate(float $rate) : self
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get Rate
     *
     * @return float|null
     */
    public function getRate() : ?float
    {
        return $this->rate;
    }
}
