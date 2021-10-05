<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait CodeTrait
{
    protected ?string $code = null;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
