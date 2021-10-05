<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ButtonTrait
{
    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $button;

    public function getButton(): ?string
    {
        return $this->button;
    }

    public function setButton(?string $button): self
    {
        $this->button = $button;

        return $this;
    }
}
