<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

trait ButtonsTrait
{
    #[ORM\Column(type: Types::JSON, unique: true, nullable: false)]
    protected array $buttons = [];

    #[Pure]
    public function getButton(string $locale = null): string
    {
        return $this->buttons[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setButton(string $button, string $locale = null): self
    {
        $this->buttons[ApplicationUtility::locale($locale)] = $button;

        return $this;
    }

    public function getButtons(): array
    {
        return $this->buttons;
    }

    public function setButtons(array $buttons): self
    {
        $this->buttons = $buttons;

        return $this;
    }

    #[Pure]
    public function getButtonFr(): string
    {
        return $this->getButton('fr');
    }

    public function setButtonFr(string $button): self
    {
        return $this->setButton($button, 'fr');
    }

    #[Pure]
    public function getButtonEn(): string
    {
        return $this->getButton('en');
    }

    public function setButtonEn(string $button): self
    {
        return $this->setButton($button, 'en');
    }
}