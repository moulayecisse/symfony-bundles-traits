<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait SummaryTrait
{
    protected ?string $summary = null;

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }
}
