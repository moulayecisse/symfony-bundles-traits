<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use JetBrains\PhpStorm\Pure;

trait DescriptionsTrait
{
    protected array $descriptions = [];

    #[Pure] public function getDescription(string $locale = null): string
    {
        return $this->descriptions[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setDescription(string $description, string $locale = null): self
    {
        $this->descriptions[ApplicationUtility::locale($locale)] = $description;

        return $this;
    }

    public function getDescriptions(): array
    {
        return $this->descriptions;
    }

    public function setDescriptions(array $descriptions): self
    {
        $this->descriptions = $descriptions;

        return $this;
    }

    #[Pure] public function getDescriptionFr(): string
    {
        return $this->getDescription('fr');
    }

    public function setDescriptionFr(string $description): self
    {
        return $this->setDescription($description, 'fr');
    }

    #[Pure] public function getDescriptionEn(): string
    {
        return $this->getDescription('en');
    }

    public function setDescriptionEn(string $description): self
    {
        return $this->setDescription($description, 'en');
    }
}
