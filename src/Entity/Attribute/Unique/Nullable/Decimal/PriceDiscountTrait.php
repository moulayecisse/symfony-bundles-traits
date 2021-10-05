<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Decimal;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait PriceDiscountTrait
{
    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, unique: true, nullable: true)]
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
