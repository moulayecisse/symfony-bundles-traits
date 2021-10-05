<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use JetBrains\PhpStorm\Pure;

trait PlaceholdersTrait
{
    protected array $placeholders = [];

    #[Pure] public function getPlaceholder(string $locale = null): string
    {
        return $this->placeholders[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setPlaceholder(string $placeholder, string $locale = null): self
    {
        $this->placeholders[ApplicationUtility::locale($locale)] = $placeholder;

        return $this;
    }

    public function getPlaceholders(): array
    {
        return $this->placeholders;
    }

    public function setPlaceholders(array $placeholders): self
    {
        $this->placeholders = $placeholders;

        return $this;
    }

    #[Pure] public function getPlaceholderFr(): string
    {
        return $this->getPlaceholder('fr');
    }

    public function setPlaceholderFr(string $placeholder): self
    {
        return $this->setPlaceholder($placeholder, 'fr');
    }

    #[Pure] public function getPlaceholderEn(): string
    {
        return $this->getPlaceholder('en');
    }

    public function setPlaceholderEn(string $placeholder): self
    {
        return $this->setPlaceholder($placeholder, 'en');
    }
}
