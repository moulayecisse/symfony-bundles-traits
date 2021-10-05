<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsIdTrait
{
    /**
     * @ORM\Column(type="boolean", unique=true, nullable=true)
     */
    protected ?bool $isId;

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
