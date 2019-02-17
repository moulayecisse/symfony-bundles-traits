<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait FloorTrait
{
    /**
     * Floor
     *
     * @var int
     *
     * @ORM\Column(type="integer", nullable=false, unique=false)
     */
    protected $floor;

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
     * @return int|null
     */
    public function getFloor() : int
    {
        return $this->floor;
    }
}
