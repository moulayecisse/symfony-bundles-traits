<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ButtonTrait
{
    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
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
