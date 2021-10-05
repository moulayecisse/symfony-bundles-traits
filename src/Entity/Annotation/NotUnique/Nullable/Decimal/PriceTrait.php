<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Decimal;

use Doctrine\ORM\Mapping as ORM;

trait PriceTrait
{
    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, unique=false, nullable=true)
     */
    protected int $price;

    public function setPrice(int $price) : self
    {
        $this->price = $price;

        return $this;
    }

    public function getPrice() : int
    {
        return $this->price;
    }
}
