<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Float;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait AmountTrait
{
    #[ORM\Column(type: Types::FLOAT, unique: false, nullable: false)]
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
