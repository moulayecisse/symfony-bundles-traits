<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait LongitudeTrait
{
    /**
     * @ORM\Column(type="float", unique=false, nullable=true)
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
