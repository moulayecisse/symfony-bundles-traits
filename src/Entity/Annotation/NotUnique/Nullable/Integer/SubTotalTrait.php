<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait SubTotalTrait
{
    /**
     * @ORM\Column(type="integer", unique=false, nullable=true)
     */
    protected ?int $subTotal;

    public function getSubTotal(): ?int
    {
        return $this->subTotal ?? 1;
    }

    public function setSubTotal(?int $subTotal): self
    {
        $this->subTotal = $subTotal;

        return $this;
    }
}
