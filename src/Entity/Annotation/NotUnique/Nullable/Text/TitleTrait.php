<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TitleTrait
{
    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $title;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
