<?php
namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Float;

trait LongitudeTrait
{
    protected ?float $longitude;

    public function setLongitude(?float $longitude) : self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLongitude() : ?float
    {
        return $this->longitude;
    }
}
