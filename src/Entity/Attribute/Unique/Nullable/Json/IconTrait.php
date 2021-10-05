<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Json;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait IconTrait
{
    #[ORM\Column(type: Types::JSON, unique: true, nullable: true)]
    protected array $icon = [];

    public function getIcon(): ?array
    {
        return $this->icon;
    }

    public function setIcon(?array $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIconName(): ?string
    {
        return $this->icon['name'] ?? null;
    }

    public function setIconName(?string $name): self
    {
        return $this->setIconValue('name', $name);
    }

    public function getIconType(): ?string
    {
        return $this->icon['type'] ?? null;
    }

    public function setIconType(?string $type): self
    {
        return $this->setIconValue('type', $type);
    }

    protected function setIconValue(?string $name, ?string $value): self
    {
        if (!$this->icon) {
            $this->icon = [];
        }

        if ($value) {
            $this->icon[$name] = $value;
        } elseif (isset($this->icon[$name])) {
            unset($this->icon[$name]);
        }

        return $this;
    }
}
