<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait OtherCountTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: true, nullable: true)]
    protected ?int $otherCount = null;

    public function getOtherCount(): ?int
    {
        return $this->otherCount;
    }

    public function setOtherCount(int $otherCount): self
    {
        $this->otherCount = $otherCount;

        return $this;
    }
}
