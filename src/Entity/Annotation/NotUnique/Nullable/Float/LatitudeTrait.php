<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait LatitudeTrait
{
    /**
     * @ORM\Column(type="float", unique=false, nullable=true)
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
