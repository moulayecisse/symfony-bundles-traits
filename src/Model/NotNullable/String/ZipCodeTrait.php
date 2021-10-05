<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

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
