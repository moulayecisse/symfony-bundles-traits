<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait SwiftTrait
{
    #[ORM\Column(type: Types::TEXT, unique: false, nullable: false)]
    protected string $swift;

    public function getSwift(): string
    {
        return $this->swift;
    }

    public function setSwift(string $swift): self
    {
        $this->swift = $swift;

        return $this;
    }
}