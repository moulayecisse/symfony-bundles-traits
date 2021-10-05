<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait SwiftTrait
{
    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
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
