<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

trait SlugsTrait
{
    /**
     * @ORM\Column(type="json", unique=false, nullable=false)
     */
    protected array $slugs = [];

    public function getSlug(string $locale = null): string
    {
        return $this->slugs[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setSlug(string $slug, string $locale = null): self
    {
        $this->slugs[ApplicationUtility::locale($locale)] = $slug;

        return $this;
    }

    public function getSlugs(): array
    {
        return $this->slugs;
    }

    public function setSlugs(array $slugs): self
    {
        $this->slugs = $slugs;

        return $this;
    }

    public function getSlugFr(): string
    {
        return $this->getSlug('fr');
    }

    public function setSlugFr(string $slug): self
    {
        return $this->setSlug($slug, 'fr');
    }

    public function getSlugEn(): string
    {
        return $this->getSlug('en');
    }

    public function setSlugEn(string $slug): self
    {
        return $this->setSlug($slug, 'en');
    }
}
