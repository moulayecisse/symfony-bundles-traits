<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait TemplateTrait
{
    protected string $template = 'default';

    public function getTemplate(): string
    {
        return $this->template;
    }

    public function setTemplate(string $template): self
    {
        $this->template = $template;

        return $this;
    }
}
