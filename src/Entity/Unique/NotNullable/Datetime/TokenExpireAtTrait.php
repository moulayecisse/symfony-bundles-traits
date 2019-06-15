<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Entity\Unique\NotNullable\Datetime;


use Doctrine\ORM\Mapping as ORM;

/**
 * trait DateTrait.
 */
trait TokenExpireAtTrait
{
    /**
     * TokenExpireAt.
     *
     * @var \DateTime|null
     *
     * @ORM\Column(type="datetime", nullable=false, unique=true)
     */
    protected $tokenExpireAt;

    /**
     * Set TokenExpireAt.
     *
     * @param \DateTime|null $tokenExpireAt Content
     *
     * @return self
     */
    public function setTokenExpireAt(?DateTime $tokenExpireAt): self
    {
        $this->tokenExpireAt = $tokenExpireAt;

        return $this;
    }

    /**
     * Get TokenExpireAt.
     *
     * @return \DateTime|null
     */
    public function getTokenExpireAt(): ?DateTime
    {
        return $this->tokenExpireAt;
    }
}
