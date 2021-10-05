<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsValidTrait
{
    /**
     * @ORM\Column(type="boolean", unique=true, nullable=true)
     */
    protected ?bool $isValid;

    public function getIsValid(): ?bool
    {
        return $this->isValid;
    }

    public function setIsValid(?bool $isValid): self
    {
        $this->isValid = $isValid;

        return $this;
    }
}
