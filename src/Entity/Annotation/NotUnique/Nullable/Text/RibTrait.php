<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait RibTrait
{
    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
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
