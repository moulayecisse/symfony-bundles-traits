<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait EmailTrait
{
    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $email;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
