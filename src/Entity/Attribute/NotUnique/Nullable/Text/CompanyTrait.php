<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait CompanyTrait
{
    #[ORM\Column(type: Types::TEXT, unique: false, nullable: true)]
    protected ?string $company;

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;

        return $this;
    }
}
