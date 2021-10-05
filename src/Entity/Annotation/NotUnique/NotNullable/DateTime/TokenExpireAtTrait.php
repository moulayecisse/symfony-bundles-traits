<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait TokenExpireAtTrait
{
    /**
     * @ORM\Column(type="datetime", unique=false, nullable=false)
     */
    protected DateTime $tokenExpireAt;

    public function __construct()
    {
        $this->setTokenExpireAt(new DateTime());
    }

    public function getTokenExpireAt(): DateTime
    {
        return $this->tokenExpireAt;
    }

    public function setTokenExpireAt(DateTime $tokenExpireAt): self
    {
        $this->tokenExpireAt = $tokenExpireAt;

        return $this;
    }
}
