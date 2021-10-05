<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean;

trait IsVerifiedTrait
{
    protected ?bool $isVerified = false;

    public function getIsVerified(): ?bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(?bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }
}
