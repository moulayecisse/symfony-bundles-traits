<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ResumeTrait
{
    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $resume;

    public function getResume(): string
    {
        return $this->resume;
    }

    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }
}
