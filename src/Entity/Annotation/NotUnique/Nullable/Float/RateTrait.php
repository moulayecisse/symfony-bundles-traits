<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait RateTrait
{
    /**
     * @ORM\Column(type="float", unique=false, nullable=true)
     */
    protected ?float $rate;

    public function setRate(?float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getRate(): ?float
    {
        return $this->rate;
    }
}
