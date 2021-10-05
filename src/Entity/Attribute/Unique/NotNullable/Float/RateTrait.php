<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Float;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait RateTrait
{
    #[ORM\Column(type: Types::FLOAT, unique: true, nullable: false)]
    protected int $rate;

    public function setRate(int $rate) : self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getRate() : int
    {
        return $this->rate;
    }
}
