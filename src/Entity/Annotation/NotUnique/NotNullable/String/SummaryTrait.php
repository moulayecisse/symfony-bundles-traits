<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait SummaryTrait
{
    /**
     * @ORM\Column(type="string", length=255, unique=false, nullable=false)
     */
    protected string $summary;

    public function getSummary(): string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }
}
