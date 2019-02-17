<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait AmountTrait
{
    /**
     * Amount
     *
     * @var int
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $amount;

    /**
     * Set Amount
     *
     * @param  int $amount
     *
     * @return self
     */
    public function setAmount(int $amount) : self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get Amount
     *
     * @return int|null
     */
    public function getAmount() : ?int
    {
        return $this->amount;
    }
}
