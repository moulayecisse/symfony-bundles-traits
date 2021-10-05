<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Array;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait TemplatesTrait
{
    #[ORM\Column(type: Types::ARRAY, unique: false, nullable: true)]
    protected ?array $templates = ['default'];

    public function getTemplates(): ?array
    {
        return $this->templates;
    }

    public function setTemplates(?array $templates): self
    {
        $this->templates = $templates;

        return $this;
    }

    /**
     * @param mixed $template
     */
    public function addTemplate(?string $template)
    {
        $this->templates[] = $template;
    }

    /**
     * @param mixed $template
     */
    public function removeTemplate(?string $template)
    {
        if (false !== $key = array_search($template, $this->templates, true)) {
            array_splice($this->templates, $key, 1);
        }
    }
}
