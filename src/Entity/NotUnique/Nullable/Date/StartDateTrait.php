<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Entity\NotUnique\Nullable\Date;


use Doctrine\ORM\Mapping as ORM;

/**
 * trait DateTrait.
 */
trait StartDateTrait
{
    /**
     * StartDate
     *
     * @var \DateTime
     *
     * @ORM\Column(type="date", nullable=true, unique=false)
     */
    protected $startDate;

    /**
     * Set startDate.
     *
     * @param \DateTime $startDate Content
     *
     * @return self
     */
    public function setStartDate(?\Datetime $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate.
     *
     * @return \DateTime|null
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }
}
