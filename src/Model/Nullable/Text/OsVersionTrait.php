<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait OsVersionTrait
{
    protected ?string $osVersion = null;

    public function getOsVersion(): ?string
    {
        return $this->osVersion;
    }

    public function setOsVersion(?string $osVersion): self
    {
        $this->osVersion = $osVersion;

        return $this;
    }
}
