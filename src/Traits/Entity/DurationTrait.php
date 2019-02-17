<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait DurationTrait
{
    /**
     * Duration
     *
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $duration;

    /**
     * Set Duration
     *
     * @param  int $duration
     *
     * @return self
     */
    public function setDuration(int $duration) : self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get Duration
     *
     * @return int|null
     */
    public function getDuration() : ?int
    {
        return $this->duration;
    }
}
