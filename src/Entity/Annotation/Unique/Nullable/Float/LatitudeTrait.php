<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait LatitudeTrait
{
    /**
     * @ORM\Column(type="float", unique=true, nullable=true)
     */
    protected ?float $latitude;

    public function setLatitude(?float $latitude) : self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }
}
