<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Decimal;

use Doctrine\ORM\Mapping as ORM;

trait PriceDiscountTrait
{
    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, unique=false, nullable=true)
     */
    protected ?float $priceDiscount;

    public function setPriceDiscount(?float $priceDiscount) : self
    {
        $this->priceDiscount = $priceDiscount;

        return $this;
    }

    public function getPriceDiscount(): ?float
    {
        return $this->priceDiscount;
    }
}
