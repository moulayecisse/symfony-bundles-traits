<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait PageNumberTrait
{
    #[ORM\Column(type: Types::INTEGER, unique: false, nullable: true)]
    protected ?int $pageNumber;

    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    public function setPageNumber(?int $pageNumber): self
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }
}
