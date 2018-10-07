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
trait ReturnDateTrait
{
    /**
     * ReturnDate
     *
     * @var \DateTime
     *
     * @ORM\Column(type="date", nullable=true)
     */
    private $returnDate;

    /**
     * Set returnDate.
     *
     * @param \DateTime $returnDate Content
     *
     * @return self
     */
    public function setReturnDate(\DateTime $returnDate): self
    {
        $this->returnDate = $returnDate;

        return $this;
    }

    /**
     * Get returnDate.
     *
     * @return \DateTime
     */
    public function getReturnDate(): \DateTime
    {
        return $this->returnDate;
    }
}
