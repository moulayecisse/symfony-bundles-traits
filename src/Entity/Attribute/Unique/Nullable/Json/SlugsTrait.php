<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

trait SlugsTrait
{
    #[ORM\Column(type: Types::JSON, unique: true, nullable: true)]
    protected array $slugs = [];

    #[Pure]
    public function getSlug(?string $locale = null): ?string
    {
        return $this->slugs[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setSlug(?string $slug, ?string $locale = null): self
    {
        $this->slugs[ApplicationUtility::locale($locale)] = $slug;

        return $this;
    }

    public function getSlugs(): ?array
    {
        return $this->slugs;
    }

    public function setSlugs(array $slugs): self
    {
        $this->slugs = $slugs;

        return $this;
    }

    #[Pure]
    public function getSlugFr(): ?string
    {
        return $this->getSlug('fr');
    }

    public function setSlugFr(?string $slug): self
    {
        return $this->setSlug($slug, 'fr');
    }

    #[Pure]
    public function getSlugEn(): ?string
    {
        return $this->getSlug('en');
    }

    public function setSlugEn(?string $slug): self
    {
        return $this->setSlug($slug, 'en');
    }
}
