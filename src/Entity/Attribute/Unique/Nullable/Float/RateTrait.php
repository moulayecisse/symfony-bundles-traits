<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Float;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait RateTrait
{
    #[ORM\Column(type: Types::FLOAT, unique: true, nullable: true)]
    protected ?float $rate;

    public function setRate(?float $rate) : self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getRate() : ?float
    {
        return $this->rate;
    }
}