<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime;

use DateTime;

trait TokenExpireAtTrait
{
    protected ?DateTime $tokenExpireAt;

    public function getTokenExpireAt(): ?DateTime
    {
        return $this->tokenExpireAt;
    }

    public function setTokenExpireAt(?DateTime $tokenExpireAt): self
    {
        $this->tokenExpireAt = $tokenExpireAt;

        return $this;
    }
}
