<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

trait ContextsTrait
{
    /**
     * @ORM\Column(type="json", unique=true, nullable=false)
     */
    protected array $contexts = [];

    public function getContext(string $locale = null): string
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

    public function getContextFr(): string
    {
        return $this->getContext('fr');
    }

    public function setContextFr(string $context): self
    {
        return $this->setContext($context, 'fr');
    }

    public function getContextEn(): string
    {
        return $this->getContext('en');
    }

    public function setContextEn(string $context): self
    {
        return $this->setContext($context, 'en');
    }
}
