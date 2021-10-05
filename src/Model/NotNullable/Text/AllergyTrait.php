<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait AllergyTrait
{
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
