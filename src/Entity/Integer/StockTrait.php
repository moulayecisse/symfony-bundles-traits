<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\Integer;

use Doctrine\ORM\Mapping as ORM;

trait StockTrait
{
    /**
     * Stock
     *
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $stock;

    /**
     * Set Stock
     *
     * @param  int $stock
     *
     * @return self
     */
    public function setStock(int $stock) : self
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get Stock
     *
     * @return int|null
     */
    public function getStock() : ?int
    {
        return $this->stock;
    }
}
