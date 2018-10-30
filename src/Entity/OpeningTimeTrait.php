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
trait OpeningTimeTrait
{
    /**
     * OpeningTime
     *
     * @var \DateTime
     *
     * @ORM\Column(type="time", nullable=true)
     */
    private $OpeningTime;

    /**
     * Set OpeningTime.
     *
     * @param \DateTime $OpeningTime Content
     *
     * @return self
     */
    public function setOpeningTime(\DateTime $OpeningTime): self
    {
        $this->OpeningTime = $OpeningTime;

        return $this;
    }

    /**
     * Get OpeningTime.
     *
     * @return \DateTime|null
     */
    public function getOpeningTime(): ?\DateTime
    {
        return $this->OpeningTime;
    }
}
