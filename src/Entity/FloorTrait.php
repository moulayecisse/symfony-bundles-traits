<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

Trait FloorTrait
{
    /**
     * Floor
     *
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $floor;

    /**
     * Set floor
     *
     * @param  int $floor
     *
     * @return self
     */
    public function setFloor(int $floor) : self
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Get floor
     *
     * @return int
     */
    public function getFloor() : int
    {
        return $this->floor;
    }
}