<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait StudentCountTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: false, nullable: false)]
    protected int $studentCount;

    public function getStudentCount(): int
    {
        return $this->studentCount;
    }

    public function setStudentCount(int $studentCount): self
    {
        $this->studentCount = $studentCount;

        return $this;
    }
}
