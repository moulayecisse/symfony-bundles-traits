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
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->CreatedAt;
    }
}
