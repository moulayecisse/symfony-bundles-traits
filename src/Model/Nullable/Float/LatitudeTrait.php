<?php
namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Float;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait LatitudeTrait
{
    #[ORM\Column(type: Types::FLOAT, unique: false, nullable: true)]
    protected ?float $latitude;

    public function setLatitude(?float $latitude) : self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLatitude() : ?float
    {
        return $this->latitude;
    }
}
