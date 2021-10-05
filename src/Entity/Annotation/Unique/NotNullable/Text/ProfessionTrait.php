<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ProfessionTrait
{
    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
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
