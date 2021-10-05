<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsIdTrait
{
    /**
     * @ORM\Column(type="boolean", unique=true, nullable=false)
     */
    protected bool $isId = false;

    public function getIsId(): bool
    {
        return $this->isId;
    }

    public function setIsId(bool $isId): self
    {
        $this->isId = $isId;

        return $this;
    }
}