<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

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
