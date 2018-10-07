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
trait DateTrait
{
    /**
     * Name.
     *
     * @var \DateTime
     *
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

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
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }
}
