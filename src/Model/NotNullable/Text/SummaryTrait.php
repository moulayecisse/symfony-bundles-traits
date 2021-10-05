<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait SummaryTrait
{
    protected string $summary;

    public function getSummary(): string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }
}
