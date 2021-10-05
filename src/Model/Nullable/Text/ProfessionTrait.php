<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait ProfessionTrait
{
    protected ?string $profession = null;

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(?string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }
}
