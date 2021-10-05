<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait ZipCodeTrait
{
    protected string $zipCode;

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function setZipCode(string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }
}
