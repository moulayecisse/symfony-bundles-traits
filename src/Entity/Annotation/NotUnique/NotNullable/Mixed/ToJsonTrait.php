<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Mixed;

trait ToJsonTrait
{
    public function __toJson(): string
    {
        return json_encode($this->__toArray());
    }
}
