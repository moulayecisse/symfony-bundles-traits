<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\DateTime;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait ExpiredAtTrait
{
    #[ORM\Column(type: Types::DATETIME_MUTABLE, unique: true, nullable: false)]
    protected ?DateTime $expiredAt;

    public function __construct()
    {
        $this->setExpiredAt(new DateTime());
    }

    public function getExpiredAt(): ?DateTime
    {
        return $this->expiredAt;
    }

    public function setExpiredAt(DateTime $expiredAt): self
    {
        $this->expiredAt = $expiredAt;

        return $this;
    }
}
