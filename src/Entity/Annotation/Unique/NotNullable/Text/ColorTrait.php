<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ColorTrait
{
    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $Color;

    public function getColor(): string
    {
        return $this->Color;
    }

    public function setColor(string $Color): self
    {
        $this->Color = $Color;

        return $this;
    }
}
