<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait BriefTrait
{
    /**
     * @ORM\Column(type="string", length=255, unique=false, nullable=true)
     */
    protected ?string $brief;

    public function getBrief(): ?string
    {
        return $this->brief;
    }

    public function setBrief(?string $brief): self
    {
        $this->brief = $brief;

        return $this;
    }
}
