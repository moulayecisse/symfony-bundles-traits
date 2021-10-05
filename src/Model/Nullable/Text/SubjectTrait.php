<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait SubjectTrait
{
    protected ?string $subject = null;

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }
}
