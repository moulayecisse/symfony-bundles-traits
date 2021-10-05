<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait ContextTrait
{
    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=false)
     */
    protected string $context;

    public function getContext(): string
    {
        return $this->context;
    }

    public function setContext(string $context): self
    {
        $this->context = $context;

        return $this;
    }
}
