<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait AllergyTrait
{
    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $allergy;

    public function getAllergy(): string
    {
        return $this->allergy;
    }

    public function setAllergy(string $allergy): self
    {
        $this->allergy = $allergy;

        return $this;
    }
}
