<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsLocalTrait
{
    /**
     * @ORM\Column(type="boolean", unique=false, nullable=true)
     */
    protected ?bool $isLocal;

    public function getIsLocal(): ?bool
    {
        return $this->isLocal;
    }

    public function setIsLocal(?bool $isLocal): self
    {
        $this->isLocal = $isLocal;

        return $this;
    }
}
