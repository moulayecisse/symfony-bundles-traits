<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait VatAmountTrait
{
    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
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
