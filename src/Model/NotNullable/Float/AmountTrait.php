<?php
namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Float;

trait AmountTrait
{
    protected int $amount;

    public function setAmount(int $amount) : self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getAmount() : int
    {
        return $this->amount;
    }
}
