<?php
namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Float;

trait AmountTrait
{
    protected ?float $amount;

    public function setAmount(?float $amount) : self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getAmount() : ?float
    {
        return $this->amount;
    }
}
