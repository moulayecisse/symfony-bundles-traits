<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Float;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait LongitudeTrait
{
    #[ORM\Column(type: Types::FLOAT, unique: true, nullable: true)]
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
