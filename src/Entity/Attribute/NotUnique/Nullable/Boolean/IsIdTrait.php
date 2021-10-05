<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Boolean;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait IsIdTrait
{
    #[ORM\Column(type: Types::BOOLEAN, unique: false, nullable: true)]
    protected ?bool $isId = false;

    public function getIsId(): ?bool
    {
        return $this->isId;
    }

    public function setIsId(?bool $isId): self
    {
        $this->isId = $isId;

        return $this;
    }
}
