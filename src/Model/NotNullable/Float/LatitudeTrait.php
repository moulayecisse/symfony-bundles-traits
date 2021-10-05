<?php
namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Float;

trait LatitudeTrait
{
    protected int $latitude;

    public function setLatitude(int $latitude) : self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLatitude() : int
    {
        return $this->latitude;
    }
}
