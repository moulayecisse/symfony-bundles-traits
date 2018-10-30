<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

Trait ValueTrait
{
    /**
     * Value
     *
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $Value;

    /**
     * Set Value
     *
     * @param  string $Value
     *
     * @return self
     */
    public function setValue(string $Value) : self
    {
        $this->Value = $Value;

        return $this;
    }

    /**
     * Get Value
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->Value;
    }
}