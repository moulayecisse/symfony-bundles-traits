<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Traits\Entity;

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
     * @ORM\Column(type="date", nullable=true)
     */
    protected $date;

    /**
     * Set date.
     *
     * @param \DateTime $date Content
     *
     * @return self
     */
    public function setDate(\DateTime $date): self
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
