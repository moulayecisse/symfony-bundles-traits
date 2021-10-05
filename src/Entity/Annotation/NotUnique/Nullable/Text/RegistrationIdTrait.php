<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait RegistrationIdTrait
{
    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $registrationId;

    public function getRegistrationId(): string
    {
        return $this->registrationId;
    }

    public function setRegistrationId(string $registrationId): self
    {
        $this->registrationId = $registrationId;

        return $this;
    }
}
