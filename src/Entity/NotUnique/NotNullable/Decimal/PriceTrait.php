<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\NotNullable\Decimal;

use Doctrine\ORM\Mapping as ORM;

trait PriceTrait
{
    /**
     * Price
     *
     * @var int
     *
     * @ORM\Column(type="decimal", precision=12, scale=2, nullable=false, unique=false)
     */
    protected $price;

    /**
     * Set Price
     *
     * @param  int $price
     *
     * @return self
     */
    public function setPrice(int $price) : self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get Price
     *
     * @return int|null
     */
    public function getPrice() : int
    {
        return $this->price;
    }
}
