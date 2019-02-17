<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait PriceTrait
{
    /**
     * Price
     *
     * @var int
     *
     * @ORM\Column(type="integer", nullable=false, unique=true)
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
    public function getPrice() : ?int
    {
        return $this->price;
    }
}
