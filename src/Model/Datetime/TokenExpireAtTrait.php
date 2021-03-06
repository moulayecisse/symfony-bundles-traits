<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Model\Datetime;



/**
 * trait DateTrait.
 */
trait TokenExpireAtTrait
{
    /**
     * TokenExpireAt.
     *
     * @var \DateTime|null
     */
    protected $tokenExpireAt;

    /**
     * Set TokenExpireAt.
     *
     * @param \DateTime|null $tokenExpireAt Content
     *
     * @return self
     */
    public function setTokenExpireAt(?\DateTime $tokenExpireAt): self
    {
        $this->tokenExpireAt = $tokenExpireAt;

        return $this;
    }

    /**
     * Get TokenExpireAt.
     *
     * @return \DateTime|null
     */
    public function getTokenExpireAt(): ?\DateTime
    {
        return $this->tokenExpireAt;
    }
}
