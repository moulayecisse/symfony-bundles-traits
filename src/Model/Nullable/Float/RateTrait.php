<?php
namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Float;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait RateTrait
{
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
