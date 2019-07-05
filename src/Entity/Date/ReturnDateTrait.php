<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Entity\Date;


use Doctrine\ORM\Mapping as ORM;

/**
 * trait DateTrait.
 */
trait ReturnDateTrait
{
    /**
     * ReturnDate
     *
     * @var \DateTime
     *
     * @ORM\Column(type="date")
     */
    protected $returnDate;

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
     * @return \DateTime|null
     */
    public function getReturnDate(): ?\DateTime
    {
        return $this->returnDate;
    }
}
