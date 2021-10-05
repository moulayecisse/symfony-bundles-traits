<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait UsageLimitTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: true, nullable: true)]
    protected ?int $usageLimit;

    public function getUsageLimit(): ?int
    {
        return $this->usageLimit;
    }

    public function setUsageLimit(int $usageLimit): self
    {
        $this->usageLimit = $usageLimit;

        return $this;
    }
}