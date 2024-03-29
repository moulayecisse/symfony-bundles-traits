<?php
namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Float;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

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
