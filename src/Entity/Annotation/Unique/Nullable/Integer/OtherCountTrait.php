<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait OtherCountTrait
{
    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
     */
    protected ?int $otherCount;

    public function getOtherCount(): ?int
    {
        return $this->otherCount;
    }

    public function setOtherCount(?int $otherCount): self
    {
        $this->otherCount = $otherCount;

        return $this;
    }
}
