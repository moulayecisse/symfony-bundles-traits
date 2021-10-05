<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Mixed;

use Cisse\Bundle\TraitsBundle\Model\NotNullable\String\FirstNameTrait;
use Cisse\Bundle\TraitsBundle\Model\NotNullable\String\LastNameTrait;
use JetBrains\PhpStorm\Pure;

trait FullNameTrait
{
    use FirstNameTrait;
    use LastNameTrait;

    #[Pure] public function getFullName(): string
    {
        return "{$this->getFirstName()} {$this->getLastName()}";
    }

    public function setFullName(string $fullName): self
    {
        $fullName = trim($fullName);
        $lastName = (!str_contains($fullName, ' ')) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $fullName);
        $firstName = trim(preg_replace('#' . preg_quote($lastName, '#') . '#', '', $fullName));

        $this->setFirstName($firstName);
        $this->setLastName($lastName);

        return $this;
    }
}
