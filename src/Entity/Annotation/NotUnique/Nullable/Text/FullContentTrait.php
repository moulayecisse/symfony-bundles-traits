<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait FullContentTrait
{
    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
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
