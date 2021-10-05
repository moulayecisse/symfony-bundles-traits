<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait FieldsTrait
{
    /**
     * @ORM\Column(type="json", unique=true, nullable=false)
     */
    protected array $fields = [];

    public function getFields(): array
    {
        return $this->fields;
    }

    public function setFields(array $fields): self
    {
        $this->fields = $fields ?? [];

        return $this;
    }

    public function addField(array $field): self
    {
        if (isset($field['name'])) {
            $this->fields[$field['name']] = $field;
        }

        return $this;
    }

    public function setField(array $field): self
    {
        if (isset($field['name'])) {
            $this->fields[$field['name']] = $field;
        }

        return $this;
    }

    public function getField(array $field = []): array
    {
        if (isset($field['name'])) {
            $this->fields[$field['name']] = $field;
        }

        return [];
    }
}
