<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait RegistrationIdTrait
{
    #[ORM\Column(type: Types::TEXT, unique: true, nullable: true)]
    protected ?string $registrationId;

    public function getRegistrationId(): ?string
    {
        return $this->registrationId;
    }

    public function setRegistrationId(?string $registrationId): self
    {
        $this->registrationId = $registrationId;

        return $this;
    }
}
