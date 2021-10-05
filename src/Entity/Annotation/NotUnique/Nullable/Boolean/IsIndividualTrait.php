<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsIndividualTrait
{
    /**
     * @ORM\Column(type="boolean", unique=false, nullable=false)
     */
    protected bool $isIndividual = false;

    public function getIsIndividual(): bool
    {
        return $this->isIndividual;
    }

    public function setIsIndividual(bool $isIndividual): self
    {
        $this->isIndividual = $isIndividual;

        return $this;
    }
}
