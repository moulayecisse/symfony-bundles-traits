<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait RegistrationTokenTrait
{
    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
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
