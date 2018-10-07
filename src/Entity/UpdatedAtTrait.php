<?php
/**
 * Updated by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait DateTrait.
 */
trait UpdatedAtTrait
{
    /**
     * UpdatedAt
     *
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $UpdatedAt;

    /**
     * Set UpdatedAt.
     *
     * @param \DateTime $UpdatedAt Content
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $UpdatedAt): self
    {
        $this->UpdatedAt = $UpdatedAt;

        return $this;
    }

    /**
     * Get UpdatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->UpdatedAt;
    }
}
