<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait ZipCodeTrait
{
    protected ?string $zipCode = null;

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }
}
