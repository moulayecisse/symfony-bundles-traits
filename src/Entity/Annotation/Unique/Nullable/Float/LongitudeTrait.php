<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait LongitudeTrait
{
    /**
     * @ORM\Column(type="float", unique=true, nullable=true)
     */
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
