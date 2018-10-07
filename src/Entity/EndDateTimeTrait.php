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
trait EndDateTimeTrait
{
    /**
     * EndDateTime
     *
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $EndDateTime;

    /**
     * Set EndDateTime.
     *
     * @param \DateTime $EndDateTime Content
     *
     * @return self
     */
    public function setEndDateTime(\DateTime $EndDateTime): self
    {
        $this->EndDateTime = $EndDateTime;

        return $this;
    }

    /**
     * Get EndDateTime.
     *
     * @return \DateTime
     */
    public function getEndDateTime(): \DateTime
    {
        return $this->EndDateTime;
    }
}
