<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait IdTrait
{
    #[ORM\Id, ORM\Column(type: Types::INTEGER, unique: false, nullable: true), ORM\GeneratedValue]
    protected ?int $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
