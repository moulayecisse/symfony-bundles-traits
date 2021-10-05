<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait OsVersionTrait
{
    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
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
