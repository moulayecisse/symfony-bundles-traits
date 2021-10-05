<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait NationalityTrait
{
    protected ?string $nationality = null;

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(?string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }
}
