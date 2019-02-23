<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Model\Date;

use DateTime;

/**
 * trait DateTrait.
 */
trait EndDateTrait
{
    /**
     * EndDate
     *
     * @var DateTime
     */
    protected $endDate;

    /**
     * Set endDate.
     *
     * @param DateTime $endDate Content
     *
     * @return self
     */
    public function setEndDate(?Datetime $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate.
     *
     * @return DateTime|null
     */
    public function getEndDate(): ?DateTime
    {
        return $this->endDate;
    }
}
