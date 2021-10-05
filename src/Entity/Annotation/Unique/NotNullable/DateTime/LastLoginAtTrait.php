<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait LastLoginAtTrait
{
    /**
     * @ORM\Column(type="datetime", unique=true, nullable=false)
     */
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
