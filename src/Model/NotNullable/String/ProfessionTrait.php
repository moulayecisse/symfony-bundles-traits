<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

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
