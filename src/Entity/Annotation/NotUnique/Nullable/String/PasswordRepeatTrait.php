<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait PasswordRepeatTrait
{
    /**
     * @ORM\Column(type="string", length=255, unique=false, nullable=false)
     */
    protected string $passwordRepeat;

    public function getPasswordRepeat(): string
    {
        return $this->passwordRepeat;
    }

    public function setPasswordRepeat(string $passwordRepeat): self
    {
        $this->passwordRepeat = $passwordRepeat;

        return $this;
    }
}
