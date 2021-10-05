<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

trait LinksTrait
{
    /**
     * @ORM\Column(type="json", unique=true, nullable=false)
     */
    protected array $links = [];

    public function getLink(string $locale = null): string
    {
        return $this->links[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setLink(string $link, string $locale = null): self
    {
        $this->links[ApplicationUtility::locale($locale)] = $link;

        return $this;
    }

    public function getLinks(): array
    {
        return $this->links;
    }

    public function setLinks(array $links): self
    {
        $this->links = $links;

        return $this;
    }

    public function getLinkFr(): string
    {
        return $this->getLink('fr');
    }

    public function setLinkFr(string $link): self
    {
        return $this->setLink($link, 'fr');
    }

    public function getLinkEn(): string
    {
        return $this->getLink('en');
    }

    public function setLinkEn(string $link): self
    {
        return $this->setLink($link, 'en');
    }
}
