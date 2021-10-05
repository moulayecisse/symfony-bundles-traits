<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

trait TextsTrait
{
    #[ORM\Column(type: Types::JSON, unique: true, nullable: false)]
    protected array $texts = [];

    #[Pure]
    public function getText(string $locale = null): string
    {
        return $this->texts[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setText(string $text, string $locale = null): self
    {
        $this->texts[ApplicationUtility::locale($locale)] = $text;

        return $this;
    }

    public function getTexts(): array
    {
        return $this->texts;
    }

    public function setTexts(array $texts): self
    {
        $this->texts = $texts;

        return $this;
    }

    #[Pure]
    public function getTextFr(): string
    {
        return $this->getText('fr');
    }

    public function setTextFr(string $text): self
    {
        return $this->setText($text, 'fr');
    }

    #[Pure]
    public function getTextEn(): string
    {
        return $this->getText('en');
    }

    public function setTextEn(string $text): self
    {
        return $this->setText($text, 'en');
    }
}
