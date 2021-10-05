<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ValueTrait
{
    /**
     * @ORM\Column(type="json", unique=true, nullable=false)
     */
    protected mixed $value;

    public function getValue(): mixed
    {
        return json_decode($this->value);
    }

    public function setValue(mixed $value): self
    {
        $this->value = json_encode($value);

        return $this;
    }
}
