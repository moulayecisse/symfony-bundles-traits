<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait ContextTrait
{
    protected ?string $context = null;

    public function getContext(): ?string
    {
        return $this->context;
    }

    public function setContext(?string $context): self
    {
        $this->context = $context;

        return $this;
    }
}
