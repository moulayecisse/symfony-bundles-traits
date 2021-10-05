<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

trait SubjectsTrait
{
    /**
     * @ORM\Column(type="json", unique=true, nullable=true)
     */
    protected ?array $subjects;

    #[Pure] public function getSubject(string $locale = null): string
    {
        return $this->subjects[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setSubject(string $subject, string $locale = null): self
    {
        $this->subjects[ApplicationUtility::locale($locale)] = $subject;

        return $this;
    }

    public function getSubjects(): ?array
    {
        return $this->subjects;
    }

    public function setSubjects(?array $subjects): self
    {
        $this->subjects = $subjects;

        return $this;
    }

    #[Pure] public function getSubjectFr(): string
    {
        return $this->getSubject('fr');
    }

    public function setSubjectFr(string $subject): self
    {
        return $this->setSubject($subject, 'fr');
    }

    #[Pure] public function getSubjectEn(): string
    {
        return $this->getSubject('en');
    }

    public function setSubjectEn(string $subject): self
    {
        return $this->setSubject($subject, 'en');
    }
}
