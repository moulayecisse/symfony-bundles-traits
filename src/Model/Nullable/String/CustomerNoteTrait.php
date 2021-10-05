<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait CustomerNoteTrait
{
    protected ?string $customerNote = null;

    public function getCustomerNote(): ?string
    {
        return $this->customerNote;
    }

    public function setCustomerNote(?string $customerNote): self
    {
        $this->customerNote = $customerNote;

        return $this;
    }
}
