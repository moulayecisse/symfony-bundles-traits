<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\NotUnique\Nullable\String;

trait NameSpaceTrait
{
    /**
     * NameSpace
     *
     * @var string
     */
    protected $nameSpace;

    /**
     * Set nameSpace
     *
     * @param  string $nameSpace
     * @return self
     */
    public function setNameSpace(?string $nameSpace) : self
    {
        $this->nameSpace = $nameSpace;

        return $this;
    }

    /**
     * Get nameSpace
     *
     * @return string|null
     */
    public function getNameSpace() : ?string
    {
        return $this->nameSpace;
    }
}
