<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Decimal;

use Doctrine\ORM\Mapping as ORM;

trait PriceDiscountTrait
{
    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, unique=true, nullable=true)
     */
    protected int $priceDiscount;

    public function setPriceDiscount(int $priceDiscount) : self
    {
        $this->priceDiscount = $priceDiscount;

        return $this;
    }

    public function getPriceDiscount() : int
    {
        return $this->priceDiscount;
    }
}
