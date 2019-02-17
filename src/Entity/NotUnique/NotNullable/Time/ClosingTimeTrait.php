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
trait ClosingTimeTrait
{
    /**
     * ClosingTime
     *
     * @var DateTime
     *
     * @ORM\Column(type="time", nullable=false, unique=false)
     */
    protected $closingTime;

    /**
     * Set ClosingTime.
     *
     * @param DateTime $closingTime Content
     *
     * @return self
     */
    public function setClosingTime(DateTime $closingTime): self
    {
        $this->closingTime = $closingTime;

        return $this;
    }

    /**
     * Get ClosingTime.
     *
     * @return DateTime|null
     */
    public function getClosingTime(): dateTime
    {
        return $this->closingTime;
    }
}
