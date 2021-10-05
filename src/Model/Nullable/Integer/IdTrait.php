<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait IdTrait
{
    protected ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
