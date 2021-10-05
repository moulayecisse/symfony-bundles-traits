<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait BriefContentTrait
{
    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=false)
     */
    protected string $briefContent;

    public function getBriefContent(): string
    {
        return $this->briefContent;
    }

    public function setBriefContent(string $briefContent): self
    {
        $this->briefContent = $briefContent;

        return $this;
    }
}
