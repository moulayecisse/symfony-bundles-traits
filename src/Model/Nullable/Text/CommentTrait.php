<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait CommentTrait
{
    protected string $comment;

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }
}
