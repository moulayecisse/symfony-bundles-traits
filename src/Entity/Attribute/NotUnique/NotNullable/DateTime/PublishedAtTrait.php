<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\DateTime;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait PublishedAtTrait
{
    #[ORM\Column(type: Types::DATETIME_MUTABLE, unique: false, nullable: false)]
    protected ?DateTime $publishedAt;

    public function __construct()
    {
        $now = new DateTime();

        $this->setPublishedAt($now);
    }

    public function getPublishedAt(): ?DateTime
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(DateTime $publishedAt): self
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }
}
