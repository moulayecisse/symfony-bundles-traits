<?php
namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Decimal;

trait PriceDiscountTrait
{
    protected ?int $priceDiscount;

    public function setPriceDiscount(?int $priceDiscount) : self
    {
        $this->priceDiscount = $priceDiscount;

        return $this;
    }

    public function getPriceDiscount() : ?int
    {
        return $this->priceDiscount;
    }
}
