<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait PriceTrait
{
    /**
     * Price
     *
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $price;

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
    public function getPrice() : ?int
    {
        return $this->price;
    }
}
