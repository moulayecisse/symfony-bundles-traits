<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use JetBrains\PhpStorm\Pure;

trait TitlesTrait
{
    protected array $titles = [];

    #[Pure] public function getTitle(string $locale = null): string
    {
        return $this->titles[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setTitle(string $title, string $locale = null): self
    {
        $this->titles[ApplicationUtility::locale($locale)] = $title;

        return $this;
    }

    public function getTitles(): array
    {
        return $this->titles;
    }

    public function setTitles(array $titles): self
    {
        $this->titles = $titles;

        return $this;
    }

    #[Pure] public function getTitleFr(): string
    {
        return $this->getTitle('fr');
    }

    public function setTitleFr(string $title): self
    {
        return $this->setTitle($title, 'fr');
    }

    #[Pure] public function getTitleEn(): string
    {
        return $this->getTitle('en');
    }

    public function setTitleEn(string $title): self
    {
        return $this->setTitle($title, 'en');
    }
}
