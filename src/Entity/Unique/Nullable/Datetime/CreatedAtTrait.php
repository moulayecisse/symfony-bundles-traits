<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Entity\Unique\Nullable\Datetime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * trait DateTrait.
 */
trait CreatedAtTrait
{
    /**
     * CreatedAt
     *
     * @var DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, unique=true)
     */
    protected $createdAt;

    /**
     * Set CreatedAt.
     *
     * @param DateTime $createdAt Content
     *
     * @return self
     */
    public function setCreatedAt(DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get CreatedAt.
     *
     * @return DateTime|null
     */
    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }
}
