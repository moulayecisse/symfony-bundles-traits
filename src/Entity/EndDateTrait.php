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
trait EndDateTrait
{
    /**
     * EndDate
     *
     * @var \DateTime
     *
     * @ORM\Column(type="date", nullable=true)
     */
    private $endDate;

    /**
     * Set endDate.
     *
     * @param \DateTime $endDate Content
     *
     * @return self
     */
    public function setEndDate(\DateTime $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate.
     *
     * @return \DateTime|null
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }
}
