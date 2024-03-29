<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait IbanTrait
{
    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=false)
     */
    protected string $iban;

    public function getIban(): string
    {
        return $this->iban;
    }

    public function setIban(string $iban): self
    {
        $this->iban = $iban;

        return $this;
    }
}
