<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait CustomerNoteTrait
{
    #[ORM\Column(type: Types::TEXT, unique: false, nullable: false)]
    protected string $customerNote;

    public function getCustomerNote(): string
    {
        return $this->customerNote;
    }

    public function setCustomerNote(string $customerNote): self
    {
        $this->customerNote = $customerNote;

        return $this;
    }
}
