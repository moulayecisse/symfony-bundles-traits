<?php
namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Float;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

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
