<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait NamespacedNameTrait
{
    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $namespacedName;

    public function getNamespacedName(): ?string
    {
        return $this->namespacedName;
    }

    public function setNamespacedName(?string $namespacedName): self
    {
        $this->namespacedName = $namespacedName;

        return $this;
    }
}
