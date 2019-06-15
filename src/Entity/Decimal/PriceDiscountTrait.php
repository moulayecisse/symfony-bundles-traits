<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\Decimal;

use Doctrine\ORM\Mapping as ORM;

trait PriceDiscountTrait
{
    /**
     * PriceDiscount
     *
     * @var int
     *
     * @ORM\Column(type="decimal", precision=12, scale=2)
     */
    protected $priceDiscount;

    /**
     * Set PriceDiscount
     *
     * @param  int $priceDiscount
     *
     * @return self
     */
    public function setPriceDiscount(int $priceDiscount) : self
    {
        $this->priceDiscount = $priceDiscount;

        return $this;
    }

    /**
     * Get PriceDiscount
     *
     * @return int|null
     */
    public function getPriceDiscount() : int
    {
        return $this->priceDiscount;
    }
}
