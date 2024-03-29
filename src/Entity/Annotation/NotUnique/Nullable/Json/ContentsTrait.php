<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

trait ContentsTrait
{
    /**
     * @ORM\Column(type="json", unique=false, nullable=false)
     */
    protected array $contents = [];

    public function getContent(string $locale = null): string
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

    public function getContentFr(): string
    {
        return $this->getContent('fr');
    }

    public function setContentFr(string $content): self
    {
        return $this->setContent($content, 'fr');
    }

    public function getContentEn(): string
    {
        return $this->getContent('en');
    }

    public function setContentEn(string $content): self
    {
        return $this->setContent($content, 'en');
    }
}
