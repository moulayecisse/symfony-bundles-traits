<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsEnableTrait
{
    /**
     * @ORM\Column(type="boolean", unique=false, nullable=false)
     */
    protected bool $isEnable = false;

    public function getIsEnable(): bool
    {
        return $this->isEnable;
    }

    public function setIsEnable(bool $isEnable): self
    {
        $this->isEnable = $isEnable;

        return $this;
    }
}
