<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\String;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait PasswordTrait
{
    #[ORM\Column(type: Types::STRING, length: 255, unique: false, nullable: true)]
    protected ?string $password;

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }
}