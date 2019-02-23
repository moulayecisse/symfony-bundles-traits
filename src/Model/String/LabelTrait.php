<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\String;

trait LabelTrait
{
    /**
     * Label
     *
     * @var string
     *
     */
    protected $label;

    /**
     * Set label
     *
     * @param  string $label
     * @return self
     */
    public function setLabel(?string $label) : self
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
