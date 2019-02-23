<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Model\NotUnique\Nullable\Datetime;

use DateTime;

/**
 * trait DateTrait.
 */
trait StartDateTimeTrait
{
    /**
     * StartDateTime
     *
     * @var DateTime
     */
    protected $startDateTime;

    /**
     * Set StartDateTime.
     *
     * @param DateTime $startDateTime Content
     *
     * @return self
     */
    public function setStartDateTime(?Datetime $startDateTime): self
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }

    /**
     * Get StartDateTime.
     *
     * @return DateTime|null
     */
    public function getStartDateTime(): ?DateTime
    {
        return $this->startDateTime;
    }
}
