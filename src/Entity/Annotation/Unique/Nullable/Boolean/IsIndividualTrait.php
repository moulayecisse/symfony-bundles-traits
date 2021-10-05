<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsIndividualTrait
{
    /**
     * @ORM\Column(type="boolean", unique=true, nullable=true)
     */
    protected ?bool $isIndividual;

    public function getIsIndividual(): ?bool
    {
        return $this->isIndividual;
    }

    public function setIsIndividual(?bool $isIndividual): self
    {
        $this->isIndividual = $isIndividual;

        return $this;
    }
}
