<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\NotNullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait LatitudeTrait
{
    /**
     * Latitude
     *
     * @var float|null
     *
     * @ORM\Column(type="float", nullable=false, unique=false)
     *
     */
    protected $latitude;

    /**
     * Set latitude
     *
     * @param  float|null $latitude
     * @return self
     */
    public function setLatitude(float $latitude) : self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float|null
     */
    public function getLatitude() : float
    {
        return $this->latitude;
    }
}
