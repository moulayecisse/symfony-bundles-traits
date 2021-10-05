<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait IdTrait
{
    #[ORM\Id, ORM\Column(type: Types::INTEGER, unique: true, nullable: false), ORM\GeneratedValue]
    protected int $id;

    public function getId(): int
    {
        return $this->id;
    }
}
