<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\String;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait BriefTrait
{
    #[ORM\Column(type: Types::STRING, length: 255, unique: true, nullable: false)]
    protected string $brief;

    public function getBrief(): string
    {
        return $this->brief;
    }

    public function setBrief(string $brief): self
    {
        $this->brief = $brief;

        return $this;
    }
}
