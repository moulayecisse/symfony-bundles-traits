<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait VatAmountTrait
{
    /**
     * @ORM\Column(type="integer", unique=false, nullable=true)
     */
    protected ?int $vatAmount;

    public function getVatAmount(): ?int
    {
        return $this->vatAmount ?? 1;
    }

    public function setVatAmount(?int $vatAmount): self
    {
        $this->vatAmount = $vatAmount;

        return $this;
    }
}
