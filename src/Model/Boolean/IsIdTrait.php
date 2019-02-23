<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\Boolean;

trait IsIdTrait
{
    /**
     * IsId
     *
     * @var bool|null
     */
    protected $isId;

    /**
     * Set isId
     *
     * @param  bool $isId
     *
     * @return self
     */
    public function setIsId(?bool $isId) : self
    {
        $this->isId = $isId;

        return $this;
    }

    /**
     * Get isId
     *
     * @return bool|null
     */
    public function getIsId() : ?bool
    {
        return $this->isId;
    }
}
