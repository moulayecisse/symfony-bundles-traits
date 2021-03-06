<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\Unique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait LabelTrait
{
    /**
     * Label
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false, unique=true)
     *
     */
    protected $label;

    /**
     * Set label
     *
     * @param  string $label
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string|null
     */
    public function getLabel() : ?string
    {
        return $this->label;
    }
}
