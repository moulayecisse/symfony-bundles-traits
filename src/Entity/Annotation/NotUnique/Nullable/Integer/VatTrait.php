<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait VatTrait
{
    /**
     * @ORM\Column(type="integer", unique=false, nullable=true)
     */
    protected ?int $vat;

    public function getVat(): ?int
    {
        return $this->vat ?? 1;
    }

    public function setVat(?int $vat): self
    {
        $this->vat = $vat;

        return $this;
    }
}
