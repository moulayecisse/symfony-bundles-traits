<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait PageNumberTrait
{
    protected int $pageNumber;

    public function getPageNumber(): int
    {
        return $this->pageNumber;
    }

    public function setPageNumber(int $pageNumber): self
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }
}
