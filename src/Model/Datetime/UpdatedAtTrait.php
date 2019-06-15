<?php
/**
 * Updated by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Model\Datetime;



/**
 * trait DateTrait.
 */
trait UpdatedAtTrait
{
    /**
     * UpdatedAt
     *
     * @var \DateTime
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
