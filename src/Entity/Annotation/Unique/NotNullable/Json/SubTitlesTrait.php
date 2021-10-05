<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

trait SubTitlesTrait
{
    /**
     * @ORM\Column(type="json", unique=true, nullable=false)
     */
    protected array $subTitles = [];

    public function getSubTitle(string $locale = null): string
    {
        return $this->subTitles[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setSubTitle(string $subTitle, string $locale = null): self
    {
        $this->subTitles[ApplicationUtility::locale($locale)] = $subTitle;

        return $this;
    }

    public function getSubTitles(): array
    {
        return $this->subTitles;
    }

    public function setSubTitles(array $subTitles): self
    {
        $this->subTitles = $subTitles;

        return $this;
    }

    public function getSubTitleFr(): string
    {
        return $this->getSubTitle('fr');
    }

    public function setSubTitleFr(string $subTitle): self
    {
        return $this->setSubTitle($subTitle, 'fr');
    }

    public function getSubTitleEn(): string
    {
        return $this->getSubTitle('en');
    }

    public function setSubTitleEn(string $subTitle): self
    {
        return $this->setSubTitle($subTitle, 'en');
    }
}
