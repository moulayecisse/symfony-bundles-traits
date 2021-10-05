<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait CustomerNoteTrait
{
    protected string $customerNote;

    public function getCustomerNote(): string
    {
        return $this->customerNote;
    }

    public function setCustomerNote(string $customerNote): self
    {
        $this->customerNote = $customerNote;

        return $this;
    }
}
