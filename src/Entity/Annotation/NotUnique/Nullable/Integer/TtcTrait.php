<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait TtcTrait
{
    /**
     * @ORM\Column(type="integer", unique=false, nullable=true)
     */
    protected ?int $ttc;

    public function getTtc(): ?int
    {
        return $this->ttc ?? 1;
    }

    public function setTtc(?int $ttc): self
    {
        $this->ttc = $ttc;

        return $this;
    }
}
