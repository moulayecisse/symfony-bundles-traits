<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait MinimumAmountTrait
{
    /**
     * @ORM\Column(type="integer", unique=false, nullable=false)
     */
    protected int $minimumAmount;

    public function getMinimumAmount(): int
    {
        return $this->minimumAmount ?? 1;
    }

    public function setMinimumAmount(int $minimumAmount): self
    {
        $this->minimumAmount = $minimumAmount;

        return $this;
    }
}
