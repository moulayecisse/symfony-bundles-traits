<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait GenderTrait
{
    protected string $gender;

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }
}
