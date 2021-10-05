<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait FullContentTrait
{
    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $fullContent;

    public function getFullContent(): ?string
    {
        return $this->fullContent;
    }

    public function setFullContent(?string $fullContent): self
    {
        $this->fullContent = $fullContent;

        return $this;
    }
}
