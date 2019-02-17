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
trait CreatedAtTrait
{
    /**
     * CreatedAt
     *
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $CreatedAt;

    /**
     * Set CreatedAt.
     *
     * @param \DateTime $CreatedAt Content
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $CreatedAt): self
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }

    /**
     * Get CreatedAt.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->CreatedAt;
    }
}
