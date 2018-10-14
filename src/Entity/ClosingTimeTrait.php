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
trait ClosingTimeTrait
{
    /**
     * ClosingTime
     *
     * @var \DateTime
     *
     * @ORM\Column(type="time", nullable=true)
     */
    private $ClosingTime;

    /**
     * Set ClosingTime.
     *
     * @param \DateTime $ClosingTime Content
     *
     * @return self
     */
    public function setClosingTime(\DateTime $ClosingTime): self
    {
        $this->ClosingTime = $ClosingTime;

        return $this;
    }

    /**
     * Get ClosingTime.
     *
     * @return \DateTime
     */
    public function getClosingTime(): \DateTime
    {
        return $this->ClosingTime;
    }
}