<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Entity\NotUnique\Nullable\Datetime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * trait DateTrait.
 */
trait EndDateTimeTrait
{
    /**
     * EndDateTime
     *
     * @var DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, unique=false)
     */
    protected $endDateTime;

    /**
     * Set EndDateTime.
     *
     * @param DateTime $endDateTime Content
     *
     * @return self
     */
    public function setEndDateTime(?Datetime $endDateTime): self
    {
        $this->endDateTime = $endDateTime;

        return $this;
    }

    /**
     * Get EndDateTime.
     *
     * @return DateTime|null
     */
    public function getEndDateTime(): ?DateTime
    {
        return $this->endDateTime;
    }
}
