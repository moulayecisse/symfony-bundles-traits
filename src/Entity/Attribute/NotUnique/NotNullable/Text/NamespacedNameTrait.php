<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait NamespacedNameTrait
{
    #[ORM\Column(type: Types::TEXT, unique: false, nullable: false)]
    protected string $namespacedName;

    public function getNamespacedName(): string
    {
        return $this->namespacedName;
    }

    public function setNamespacedName(string $namespacedName): self
    {
        $this->namespacedName = $namespacedName;

        return $this;
    }
}