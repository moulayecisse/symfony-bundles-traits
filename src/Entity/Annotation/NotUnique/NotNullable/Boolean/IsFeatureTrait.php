<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsFeatureTrait
{
    /**
     * @ORM\Column(type="boolean", unique=false, nullable=false)
     */
    protected bool $isFeature = false;

    public function getIsFeature(): bool
    {
        return $this->isFeature;
    }

    public function setIsFeature(bool $isFeature): self
    {
        $this->isFeature = $isFeature;

        return $this;
    }
}
