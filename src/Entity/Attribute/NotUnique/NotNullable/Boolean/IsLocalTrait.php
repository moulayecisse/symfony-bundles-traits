<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Boolean;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait IsLocalTrait
{
    #[ORM\Column(type: Types::BOOLEAN, unique: false, nullable: false)]
    protected bool $isLocal = false;

    public function getIsLocal(): bool
    {
        return $this->isLocal;
    }

    public function setIsLocal(bool $isLocal): self
    {
        $this->isLocal = $isLocal;

        return $this;
    }
}
