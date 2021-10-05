<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait SubTitleTrait
{
    protected string $subTitle;

    public function getSubTitle(): string
    {
        return $this->subTitle;
    }

    public function setSubTitle(string $subTitle): self
    {
        $this->subTitle = $subTitle;

        return $this;
    }
}
