<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime;

use DateTime;

trait PublishedAtTrait
{
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
