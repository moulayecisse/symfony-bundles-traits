<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Boolean;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait IsDraftTrait
{
    #[ORM\Column(type: Types::BOOLEAN, unique: true, nullable: true)]
    protected ?bool $isDraft = false;

    public function getIsDraft(): ?bool
    {
        return $this->isDraft;
    }

    public function setIsDraft(?bool $isDraft): self
    {
        $this->isDraft = $isDraft;

        return $this;
    }
}
