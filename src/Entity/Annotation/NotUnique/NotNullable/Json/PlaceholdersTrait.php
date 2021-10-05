<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

trait PlaceholdersTrait
{
    /**
     * @ORM\Column(type="json", unique=false, nullable=false)
     */
    protected array $placeholders = [];

    public function getPlaceholder(string $locale = null): string
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

    public function getPlaceholderFr(): string
    {
        return $this->getPlaceholder('fr');
    }

    public function setPlaceholderFr(string $placeholder): self
    {
        return $this->setPlaceholder($placeholder, 'fr');
    }

    public function getPlaceholderEn(): string
    {
        return $this->getPlaceholder('en');
    }

    public function setPlaceholderEn(string $placeholder): self
    {
        return $this->setPlaceholder($placeholder, 'en');
    }
}
