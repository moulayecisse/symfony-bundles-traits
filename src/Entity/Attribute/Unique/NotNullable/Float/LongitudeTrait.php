<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Float;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait LongitudeTrait
{
    #[ORM\Column(type: Types::FLOAT, unique: true, nullable: false)]
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
