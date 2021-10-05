<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ResumeTrait
{
    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
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
