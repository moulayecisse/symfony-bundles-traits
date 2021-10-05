<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use JetBrains\PhpStorm\Pure;

trait ContextsTrait
{
    protected array $contexts = [];

    #[Pure] public function getContext(string $locale = null): string
    {
        return $this->contexts[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setContext(string $context, string $locale = null): self
    {
        $this->contexts[ApplicationUtility::locale($locale)] = $context;

        return $this;
    }

    public function getContexts(): array
    {
        return $this->contexts;
    }

    public function setContexts(array $contexts): self
    {
        $this->contexts = $contexts;

        return $this;
    }

    #[Pure] public function getContextFr(): string
    {
        return $this->getContext('fr');
    }

    public function setContextFr(string $context): self
    {
        return $this->setContext($context, 'fr');
    }

    #[Pure] public function getContextEn(): string
    {
        return $this->getContext('en');
    }

    public function setContextEn(string $context): self
    {
        return $this->setContext($context, 'en');
    }
}
