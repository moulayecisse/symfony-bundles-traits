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
trait DateTrait
{
    /**
     * Name.
     *
     * @var \DateTime
     *
     * @ORM\Column(type="date", nullable=true, unique=false)
     */
    protected $date;

    /**
     * Set date.
     *
     * @param \DateTime $date Content
     *
     * @return self
     */
    public function setDate(?\Datetime $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime|null
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }
}
