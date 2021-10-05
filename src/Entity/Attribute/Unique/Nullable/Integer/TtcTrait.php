<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait TtcTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: true, nullable: true)]
    protected ?int $ttc;

    public function getTtc(): ?int
    {
        return $this->ttc;
    }

    public function setTtc(?int $ttc): self
    {
        $this->ttc = $ttc;

        return $this;
    }
}
