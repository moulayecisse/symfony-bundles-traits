<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait DateTrait.
 */
trait StartDateTrait
{
    /**
     * StartDate
     *
     * @var \DateTime
     *
     * @ORM\Column(type="date", nullable=true)
     */
    private $startDate;

    /**
     * Set startDate.
     *
     * @param \DateTime $startDate Content
     *
     * @return self
     */
    public function setStartDate(\DateTime $startDate): self
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
