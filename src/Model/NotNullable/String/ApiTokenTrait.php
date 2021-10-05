<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait ApiTokenTrait
{
    protected string $apiToken;

    public function getApiToken(): string
    {
        return $this->apiToken;
    }

    public function setApiToken(string $apiToken): self
    {
        $this->apiToken = $apiToken;

        return $this;
    }
}
