<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait FullContentTrait
{
    #[ORM\Column(type: Types::TEXT, unique: false, nullable: false)]
    protected string $fullContent;

    public function getFullContent(): string
    {
        return $this->fullContent;
    }

    public function setFullContent(string $fullContent): self
    {
        $this->fullContent = $fullContent;

        return $this;
    }
}