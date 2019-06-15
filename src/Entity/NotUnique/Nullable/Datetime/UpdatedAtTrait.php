<?php
/**
 * Updated by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Entity\NotUnique\Nullable\Datetime;


use Doctrine\ORM\Mapping as ORM;

/**
 * trait DateTrait.
 */
trait UpdatedAtTrait
{
    /**
     * UpdatedAt
     *
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, unique=false)
     */
    protected $updatedAt;

    /**
     * Set UpdatedAt.
     *
     * @param \DateTime $updatedAt Content
     *
     * @return self
     */
    public function setUpdatedAt(?\Datetime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get UpdatedAt.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }
}
