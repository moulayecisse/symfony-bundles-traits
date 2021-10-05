<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait PaidAtTrait
{
    /**
     * @ORM\Column(type="datetime", unique=true, nullable=true)
     */
    protected ?DateTime $paidAt;

    public function getPaidAt(): ?DateTime
    {
        return $this->paidAt;
    }

    public function setPaidAt(DateTime $paidAt): self
    {
        $this->paidAt = $paidAt;

        return $this;
    }
}
