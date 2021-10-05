<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait SubTitleTrait
{
    protected ?string $subTitle = null;

    public function getSubTitle(): ?string
    {
        return $this->subTitle;
    }

    public function setSubTitle(?string $subTitle): self
    {
        $this->subTitle = $subTitle;

        return $this;
    }
}
