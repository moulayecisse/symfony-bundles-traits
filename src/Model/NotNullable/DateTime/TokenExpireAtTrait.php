<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime;

use DateTime;

trait TokenExpireAtTrait
{
    protected DateTime $tokenExpireAt;

    public function __construct()
    {
        $this->setTokenExpireAt(new DateTime());
    }

    public function getTokenExpireAt(): DateTime
    {
        return $this->tokenExpireAt;
    }

    public function setTokenExpireAt(DateTime $tokenExpireAt): self
    {
        $this->tokenExpireAt = $tokenExpireAt;

        return $this;
    }
}
