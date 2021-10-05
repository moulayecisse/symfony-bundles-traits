<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Array;

use Doctrine\ORM\Mapping as ORM;

trait TemplatesTrait
{
    /**
     * @ORM\Column(type="array", unique=true, nullable=false)
     */
    protected array $templates = ['default'];

    public function getTemplates(): array
    {
        return $this->templates;
    }

    public function setTemplates(array $templates): self
    {
        $this->templates = $templates;

        return $this;
    }

    /**
     * @param mixed $template
     */
    public function addTemplate(string $template)
    {
        $this->templates[] = $template;
    }

    /**
     * @param mixed $template
     */
    public function removeTemplate(string $template)
    {
        if (false !== $key = array_search($template, $this->templates, true)) {
            array_splice($this->templates, $key, 1);
        }
    }
}
