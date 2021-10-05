<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Boolean;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait IsIndividualTrait
{
    #[ORM\Column(type: Types::BOOLEAN, unique: false, nullable: true)]
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
