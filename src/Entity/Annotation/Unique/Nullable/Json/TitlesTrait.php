<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

trait TitlesTrait
{
    /**
     * @ORM\Column(type="json", unique=true, nullable=false)
     */
    protected array $titles = [];

    public function getTitle(string $locale = null): string
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

    public function getTitleFr(): string
    {
        return $this->getTitle('fr');
    }

    public function setTitleFr(string $title): self
    {
        return $this->setTitle($title, 'fr');
    }

    public function getTitleEn(): string
    {
        return $this->getTitle('en');
    }

    public function setTitleEn(string $title): self
    {
        return $this->setTitle($title, 'en');
    }
}
