<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait AmountTrait
{
    /**
     * @ORM\Column(type="float", unique=true, nullable=true)
     */
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
