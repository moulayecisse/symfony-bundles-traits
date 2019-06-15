<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Entity\Datetime;


use Doctrine\ORM\Mapping as ORM;

/**
 * trait DateTrait.
 */
trait StartDateTimeTrait
{
    /**
     * StartDateTime
     *
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    protected $startDateTime;

    /**
     * Set StartDateTime.
     *
     * @param \DateTime $startDateTime Content
     *
     * @return self
     */
    public function setStartDateTime(DateTime $startDateTime): self
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }

    /**
     * Get StartDateTime.
     *
     * @return \DateTime|null
     */
    public function getStartDateTime(): ?DateTime
    {
        return $this->startDateTime;
    }
}
