<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait IdTrait
{
    protected int $id;

    public function getId(): int
    {
        return $this->id;
    }
}
