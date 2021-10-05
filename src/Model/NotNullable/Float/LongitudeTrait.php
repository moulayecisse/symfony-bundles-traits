<?php
namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Float;

trait LongitudeTrait
{
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
