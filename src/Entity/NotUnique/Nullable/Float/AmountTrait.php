<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait AmountTrait
{
    /**
     * Amount
     *
     * @var int
     *
     * @ORM\Column(type="float", nullable=true, unique=false)
     */
    protected $amount;

    /**
     * Set Amount
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(?float $amount) : self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get Amount
     *
     * @return float|null
     */
    public function getAmount() : ?float
    {
        return $this->amount;
    }
}
