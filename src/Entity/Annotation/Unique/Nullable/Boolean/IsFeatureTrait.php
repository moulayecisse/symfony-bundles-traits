<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsFeatureTrait
{
    /**
     * @ORM\Column(type="boolean", unique=true, nullable=true)
     */
    protected ?bool $isFeature;

    public function getIsFeature(): ?bool
    {
        return $this->isFeature;
    }

    public function setIsFeature(?bool $isFeature): self
    {
        $this->isFeature = $isFeature;

        return $this;
    }
}
