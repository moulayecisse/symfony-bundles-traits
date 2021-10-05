<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait AmountTrait
{
    /**
     * @ORM\Column(type="float", unique=false, nullable=true)
     */
    protected ?float $amount;

    public function setAmount(?float $amount) : self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }
}
