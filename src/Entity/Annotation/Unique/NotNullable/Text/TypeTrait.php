<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TypeTrait
{
    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $type;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
