<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait OrderingTrait
{
    /**
     * Ordering
     *
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true, unique=true)
     */
    protected $ordering;

    /**
     * Set Ordering
     *
     * @param  int $ordering
     *
     * @return self
     */
    public function setOrdering(int $ordering) : self
    {
        $this->ordering = $ordering;

        return $this;
    }

    /**
     * Get Ordering
     *
     * @return int|null
     */
    public function getOrdering() : ?int
    {
        return $this->ordering;
    }
}
