<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

Trait IsLocalTrait
{
    /**
     * IsLocal
     *
     * @var bool
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isLocal;

    /**
     * Set isLocal
     *
     * @param  bool $isLocal
     *
     * @return self
     */
    public function setIsLocal(bool $isLocal) : self
    {
        $this->isLocal = $isLocal;

        return $this;
    }

    /**
     * Get isLocal
     *
     * @return bool
     */
    public function getIsLocal() : bool
    {
        return $this->isLocal;
    }
}