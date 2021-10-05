<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait LatitudeTrait
{
    /**
     * @ORM\Column(type="float", unique=true, nullable=true)
     */
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
