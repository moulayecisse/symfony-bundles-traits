<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait InstitutionTrait
{
    protected string $institution;

    public function getInstitution(): string
    {
        return $this->institution;
    }

    public function setInstitution(string $institution): self
    {
        $this->institution = $institution;

        return $this;
    }
}
