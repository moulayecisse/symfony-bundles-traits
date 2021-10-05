<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait StudentCountTrait
{
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
