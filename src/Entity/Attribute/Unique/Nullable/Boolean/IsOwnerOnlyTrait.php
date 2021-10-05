<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Boolean;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait IsOwnerOnlyTrait
{
    #[ORM\Column(type: Types::BOOLEAN, unique: true, nullable: true)]
    protected ?bool $isOwnerOnly;

    public function getIsOwnerOnly(): ?bool
    {
        return $this->isOwnerOnly;
    }

    public function setIsOwnerOnly(?bool $isOwnerOnly): self
    {
        $this->isOwnerOnly = $isOwnerOnly;

        return $this;
    }
}
