<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\Boolean;

trait IsLocalTrait
{
    /**
     * IsLocal
     *
     * @var bool
     */
    protected $isLocal;

    /**
     * Set isLocal
     *
     * @param  bool $isLocal
     *
     * @return self
     */
    public function setIsLocal(?bool $isLocal) : self
    {
        $this->isLocal = $isLocal;

        return $this;
    }

    /**
     * Get isLocal
     *
     * @return bool|null
     */
    public function getIsLocal() : ?bool
    {
        return $this->isLocal;
    }
}
