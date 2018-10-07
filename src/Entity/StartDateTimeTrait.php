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
trait StartDateTimeTrait
{
    /**
     * StartDateTime
     *
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $StartDateTime;

    /**
     * Set StartDateTime.
     *
     * @param \DateTime $StartDateTime Content
     *
     * @return self
     */
    public function setStartDateTime(\DateTime $StartDateTime): self
    {
        $this->StartDateTime = $StartDateTime;

        return $this;
    }

    /**
     * Get StartDateTime.
     *
     * @return \DateTime
     */
    public function getStartDateTime(): \DateTime
    {
        return $this->StartDateTime;
    }
}
