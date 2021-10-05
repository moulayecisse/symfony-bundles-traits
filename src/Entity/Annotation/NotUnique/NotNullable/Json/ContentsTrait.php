<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

trait ContentsTrait
{
    /**
     * @ORM\Column(type="json", unique=false, nullable=false)
     */
    protected array $contents = [];

    #[Pure] public function getContent(string $locale = null): string
    {
        return $this->contents[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setContent(string $content, string $locale = null): self
    {
        $this->contents[ApplicationUtility::locale($locale)] = $content;

        return $this;
    }

    public function getContents(): array
    {
        return $this->contents;
    }

    public function setContents(array $contents): self
    {
        $this->contents = $contents;

        return $this;
    }

    #[Pure] public function getContentFr(): string
    {
        return $this->getContent('fr');
    }

    public function setContentFr(string $content): self
    {
        return $this->setContent($content, 'fr');
    }

    #[Pure] public function getContentEn(): string
    {
        return $this->getContent('en');
    }

    public function setContentEn(string $content): self
    {
        return $this->setContent($content, 'en');
    }
}
