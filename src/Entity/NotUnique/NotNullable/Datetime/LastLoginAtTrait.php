<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Entity\NotUnique\NotNullable\Datetime;

use Doctrine\ORM\Mapping as ORM;

/**
 * trait DateTrait.
 */
trait LastLoginAtTrait
{
    /**
     * LastLoginAt.
     *
     * @var \DateTime|null
     *
     * @ORM\Column(type="datetime", nullable=false, unique=false)
     */
    protected $lastLoginAt;

    /**
     * Set LastLoginAt.
     *
     * @param \DateTime $lastLoginAt Content
     *
     * @return self
     */
    public function setLastLoginAt(\DateTime $lastLoginAt): self
    {
        $this->lastLoginAt = $lastLoginAt;

        return $this;
    }

    /**
     * Get LastLoginAt.
     *
     * @return \DateTime|null
     */
    public function getLastLoginAt(): ?\DateTime
    {
        return $this->lastLoginAt;
    }
}
