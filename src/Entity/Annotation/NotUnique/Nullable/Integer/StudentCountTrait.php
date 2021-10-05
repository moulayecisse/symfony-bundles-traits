<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait StudentCountTrait
{
    /**
     * @ORM\Column(type="integer", unique=false, nullable=false)
     */
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
