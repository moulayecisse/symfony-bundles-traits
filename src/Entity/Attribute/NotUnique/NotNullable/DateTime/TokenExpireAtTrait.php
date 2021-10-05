<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\DateTime;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait TokenExpireAtTrait
{
    #[ORM\Column(type: Types::DATETIME_MUTABLE, unique: false, nullable: false)]
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
