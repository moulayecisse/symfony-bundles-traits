<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait StudentCountTrait
{
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
