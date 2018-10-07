<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

Trait PriceTrait
{
    /**
     * Price
     *
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Price;

    /**
     * Set Price
     *
     * @param  int $Price
     *
     * @return self
     */
    public function setPrice(int $Price) : self
    {
        $this->Price = $Price;

        return $this;
    }

    /**
     * Get Price
     *
     * @return int
     */
    public function getPrice() : int
    {
        return $this->Price;
    }
}