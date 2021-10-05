<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait SubjectTrait
{
    protected string $subject;

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }
}
