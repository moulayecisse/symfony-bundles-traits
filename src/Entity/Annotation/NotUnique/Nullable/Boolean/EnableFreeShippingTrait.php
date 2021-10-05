<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait EnableFreeShippingTrait
{
    /**
     * @ORM\Column(type="boolean", unique=false, nullable=true)
     */
    protected ?bool $enableFreeShipping;

    public function getEnableFreeShipping(): ?bool
    {
        return $this->enableFreeShipping;
    }

    public function setEnableFreeShipping(?bool $enableFreeShipping): self
    {
        $this->enableFreeShipping = $enableFreeShipping;

        return $this;
    }
}
