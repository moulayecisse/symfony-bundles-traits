<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait ApiTokenTrait
{
    protected ?string $apiToken = null;

    public function getApiToken(): ?string
    {
        return $this->apiToken;
    }

    public function setApiToken(?string $apiToken): self
    {
        $this->apiToken = $apiToken;

        return $this;
    }
}
