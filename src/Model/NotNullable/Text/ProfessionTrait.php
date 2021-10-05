<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait ProfessionTrait
{
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
