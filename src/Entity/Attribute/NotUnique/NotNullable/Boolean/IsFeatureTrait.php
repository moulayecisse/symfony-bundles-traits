<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Boolean;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait IsFeatureTrait
{
    #[ORM\Column(type: Types::BOOLEAN, unique: false, nullable: false)]
    protected bool $isFeature = false;

    public function getIsFeature(): bool
    {
        return $this->isFeature;
    }

    public function setIsFeature(bool $isFeature): self
    {
        $this->isFeature = $isFeature;

        return $this;
    }
}
