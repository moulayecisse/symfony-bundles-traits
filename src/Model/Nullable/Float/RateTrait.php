<?php
namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Float;

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
