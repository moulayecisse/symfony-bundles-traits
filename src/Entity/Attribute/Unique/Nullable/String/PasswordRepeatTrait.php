<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\String;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait PasswordRepeatTrait
{
    #[ORM\Column(type: Types::STRING, length: 255, unique: true, nullable: true)]
    protected ?string $passwordRepeat;

    public function getPasswordRepeat(): ?string
    {
        return $this->passwordRepeat;
    }

    public function setPasswordRepeat(?string $passwordRepeat): self
    {
        $this->passwordRepeat = $passwordRepeat;

        return $this;
    }
}
