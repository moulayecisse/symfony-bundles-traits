<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\Integer;

trait VersionCodeTrait
{
    /**
     * VersionCode
     *
     * @var int
     */
    protected $versionCode;

    /**
     * Set VersionCode
     *
     * @param  int $versionCode
     *
     * @return self
     */
    public function setVersionCode(?int $versionCode) : self
    {
        $this->versionCode = $versionCode;

        return $this;
    }

    /**
     * Get VersionCode
     *
     * @return int|null
     */
    public function getVersionCode() : ?int
    {
        return $this->versionCode;
    }
}
