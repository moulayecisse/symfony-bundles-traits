<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait RibTrait
{
    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=true)
     */
    protected ?string $rib;

    public function getRib(): ?string
    {
        return $this->rib;
    }

    public function setRib(?string $rib): self
    {
        $this->rib = $rib;

        return $this;
    }
}
