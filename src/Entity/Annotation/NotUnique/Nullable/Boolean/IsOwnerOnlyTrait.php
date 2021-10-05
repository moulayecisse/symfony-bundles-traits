<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsOwnerOnlyTrait
{
    /**
     * @ORM\Column(type="boolean", unique=false, nullable=true)
     */
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
