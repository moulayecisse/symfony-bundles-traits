<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait TotalTrait
{
    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
     */
    protected ?int $total;

    public function getTotal(): ?int
    {
        return $this->total ?? 1;
    }

    public function setTotal(?int $total): self
    {
        $this->total = $total;

        return $this;
    }
}
