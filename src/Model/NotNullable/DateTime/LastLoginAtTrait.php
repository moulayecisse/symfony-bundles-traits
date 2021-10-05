<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime;

use DateTime;

trait LastLoginAtTrait
{
    protected DateTime $lastLoginAt;

    public function __construct()
    {
        $this->setLastLoginAt(new DateTime());
    }

    public function getLastLoginAt(): DateTime
    {
        return $this->lastLoginAt;
    }

    public function setLastLoginAt(DateTime $lastLoginAt): self
    {
        $this->lastLoginAt = $lastLoginAt;

        return $this;
    }
}
