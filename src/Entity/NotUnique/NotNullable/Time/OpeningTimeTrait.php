<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Entity\NotUnique\NotNullable\Time;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * trait DateTrait.
 */
trait OpeningTimeTrait
{
    /**
     * OpeningTime
     *
     * @var DateTime
     *
     * @ORM\Column(type="time", nullable=false, unique=false)
     */
    protected $openingTime;

    /**
     * Set OpeningTime.
     *
     * @param DateTime $openingTime Content
     *
     * @return self
     */
    public function setOpeningTime(DateTime $openingTime): self
    {
        $this->openingTime = $openingTime;

        return $this;
    }

    /**
     * Get OpeningTime.
     *
     * @return DateTime|null
     */
    public function getOpeningTime(): dateTime
    {
        return $this->openingTime;
    }
}