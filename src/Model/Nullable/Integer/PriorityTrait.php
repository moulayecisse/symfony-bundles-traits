<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait PriorityTrait
{
    protected ?int $priority = null;

    public function getPriority(): ?int
    {
        return $this->priority ?? 1;
    }

    public function setPriority(?int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }
}
