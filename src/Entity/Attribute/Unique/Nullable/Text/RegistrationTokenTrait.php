<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait RegistrationTokenTrait
{
    #[ORM\Column(type: Types::TEXT, unique: true, nullable: true)]
    protected string $registrationToken;

    public function getRegistrationToken(): string
    {
        return $this->registrationToken;
    }

    public function setRegistrationToken(string $registrationToken): self
    {
        $this->registrationToken = $registrationToken;

        return $this;
    }
}
