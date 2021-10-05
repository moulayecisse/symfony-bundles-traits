<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Float;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait AmountTrait
{
    #[ORM\Column(type: Types::FLOAT, unique: true, nullable: true)]
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
