<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait PlaceholderTrait
{
    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=false)
     */
    protected string $placeholder;

    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    public function setPlaceholder(string $placeholder): self
    {
        $this->placeholder = $placeholder;

        return $this;
    }
}
