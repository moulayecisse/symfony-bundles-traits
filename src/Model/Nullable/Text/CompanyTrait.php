<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait CompanyTrait
{
    protected ?string $company = null;

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;

        return $this;
    }
}
