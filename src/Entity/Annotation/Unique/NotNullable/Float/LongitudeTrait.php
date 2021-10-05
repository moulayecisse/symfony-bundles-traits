<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait LongitudeTrait
{
    /**
     * @ORM\Column(type="float", unique=true, nullable=false)
     */
    protected int $longitude;

    public function setLongitude(int $longitude) : self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLongitude() : int
    {
        return $this->longitude;
    }
}
