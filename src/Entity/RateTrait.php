<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

Trait RateTrait
{
    /**
     * Rate
     *
     * @var float
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $Rate;

    /**
     * Set Rate
     *
     * @param  float $Rate
     *
     * @return self
     */
    public function setRate(float $Rate) : self
    {
        $this->Rate = $Rate;

        return $this;
    }

    /**
     * Get Rate
     *
     * @return float|null
     */
    public function getRate() : ?float
    {
        return $this->Rate;
    }
}