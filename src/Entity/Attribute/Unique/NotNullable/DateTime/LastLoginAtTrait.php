<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\DateTime;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait LastLoginAtTrait
{
    #[ORM\Column(type: Types::DATETIME_MUTABLE, unique: true, nullable: false)]
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
