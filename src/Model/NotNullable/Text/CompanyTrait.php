<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait CompanyTrait
{
    protected string $company;

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }
}
