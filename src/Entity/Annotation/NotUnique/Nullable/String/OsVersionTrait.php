<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait OsVersionTrait
{
    /**
     * @ORM\Column(type="string", length=255, unique=false, nullable=false)
     */
    protected string $osVersion;

    public function getOsVersion(): string
    {
        return $this->osVersion;
    }

    public function setOsVersion(string $osVersion): self
    {
        $this->osVersion = $osVersion;

        return $this;
    }
}
