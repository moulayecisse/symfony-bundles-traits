<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait StudentCountTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: true, nullable: true)]
    protected ?int $studentCount = null;

    public function getStudentCount(): ?int
    {
        return $this->studentCount;
    }

    public function setStudentCount(int $studentCount): self
    {
        $this->studentCount = $studentCount;

        return $this;
    }
}
