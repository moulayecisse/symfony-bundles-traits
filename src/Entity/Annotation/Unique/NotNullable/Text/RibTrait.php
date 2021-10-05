<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait RibTrait
{
    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $rib;

    public function getRib(): string
    {
        return $this->rib;
    }

    public function setRib(string $rib): self
    {
        $this->rib = $rib;

        return $this;
    }
}
