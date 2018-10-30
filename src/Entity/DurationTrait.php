<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

Trait DurationTrait
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