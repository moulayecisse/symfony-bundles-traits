<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait AccountTrait
{
    protected string $account;

    public function getAccount(): string
    {
        return $this->account;
    }

    public function setAccount(string $account): self
    {
        $this->account = $account;

        return $this;
    }
}
