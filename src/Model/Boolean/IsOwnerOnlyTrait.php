<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\Boolean;

trait IsOwnerOnlyTrait
{
    /**
     * IsOwnerOnly
     *
     * @var bool|null
     */
    protected $isOwnerOnly;

    /**
     * Set isOwnerOnly
     *
     * @param  bool $isOwnerOnly
     *
     * @return self
     */
    public function setIsOwnerOnly(?bool $isOwnerOnly) : self
    {
        $this->isOwnerOnly = $isOwnerOnly;

        return $this;
    }

    /**
     * Get isOwnerOnly
     *
     * @return bool|null
     */
    public function getIsOwnerOnly() : ?bool
    {
        return $this->isOwnerOnly;
    }
}
