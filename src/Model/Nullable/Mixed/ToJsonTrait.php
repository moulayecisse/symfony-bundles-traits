<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Mixed;

trait ToJsonTrait
{
    public function __toJson(): string
    {
        return json_encode($this->__toArray());
    }
}
