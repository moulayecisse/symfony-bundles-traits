<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

trait LabelsTrait
{
    /**
     * @ORM\Column(type="json", unique=true, nullable=false)
     */
    protected array $labels = [];

    public function getLabel(string $locale = null): string
    {
        return $this->labels[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setLabel(string $label, string $locale = null): self
    {
        $this->labels[ApplicationUtility::locale($locale)] = $label;

        return $this;
    }

    public function getLabels(): array
    {
        return $this->labels;
    }

    public function setLabels(array $labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    public function getLabelFr(): string
    {
        return $this->getLabel('fr');
    }

    public function setLabelFr(string $label): self
    {
        return $this->setLabel($label, 'fr');
    }

    public function getLabelEn(): string
    {
        return $this->getLabel('en');
    }

    public function setLabelEn(string $label): self
    {
        return $this->setLabel($label, 'en');
    }
}
