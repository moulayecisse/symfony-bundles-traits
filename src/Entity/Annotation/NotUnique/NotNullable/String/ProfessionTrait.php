<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait ProfessionTrait
{
    /**
     * @ORM\Column(type="string", length=255, unique=false, nullable=false)
     */
    protected string $profession;

    public function getProfession(): string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }
}
