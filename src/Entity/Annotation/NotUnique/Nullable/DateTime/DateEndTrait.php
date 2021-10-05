<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait DateEndTrait
{
    /**
     * @ORM\Column(type="datetime", unique=false, nullable=false)
     */
    protected ?DateTime $dateEnd;

    public function getDateEnd(): ?DateTime
    {
        return $this->dateEnd;
    }

    public function setDateEnd(?DateTime $dateEnd): self
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }
}
