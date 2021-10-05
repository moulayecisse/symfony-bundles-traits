<?php
namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Float;

trait RateTrait
{
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
