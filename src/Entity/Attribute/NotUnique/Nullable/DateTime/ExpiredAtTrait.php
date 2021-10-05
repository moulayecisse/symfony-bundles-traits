<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\DateTime;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait ExpiredAtTrait
{
    #[ORM\Column(type: Types::DATETIME_MUTABLE, unique: false, nullable: true)]
    protected ?DateTime $expiredAt = null;

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
