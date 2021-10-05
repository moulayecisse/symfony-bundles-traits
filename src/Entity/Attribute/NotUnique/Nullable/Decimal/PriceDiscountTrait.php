<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Decimal;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait PriceDiscountTrait
{
    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, unique: false, nullable: true)]
    protected ?float $priceDiscount;

    public function setPriceDiscount(?float $priceDiscount) : self
    {
        $this->priceDiscount = $priceDiscount;

        return $this;
    }

    public function getPriceDiscount() : ?float
    {
        return $this->priceDiscount;
    }
}
