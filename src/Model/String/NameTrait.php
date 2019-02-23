<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\NotUnique\Nullable\String;

trait NameTrait
{
    /**
     * Name
     *
     * @var string
     */
    protected $name;

    /**
     * Set name
     *
     * @param  string $name
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
}
