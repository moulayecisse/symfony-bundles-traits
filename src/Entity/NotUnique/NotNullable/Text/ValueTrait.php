<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ValueTrait
{
    /**
     * Value
     *
     * @var string
     *
     * @ORM\Column(type="text", nullable=false, unique=false)
     */
    protected $value;

    /**
     * Set Value
     *
     * @param  string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get Value
     *
     * @return string|null
     */
    public function getValue() : string
    {
        return $this->value;
    }
}
