<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Float;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait LatitudeTrait
{
    #[ORM\Column(type: Types::FLOAT, unique: false, nullable: false)]
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
