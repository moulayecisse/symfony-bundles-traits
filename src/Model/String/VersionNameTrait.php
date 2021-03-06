<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\String;

trait VersionNameTrait
{
    /**
     * VersionName
     *
     * @var string
     */
    protected $versionName;

    /**
     * Set versionName
     *
     * @param  string $versionName
     * @return self
     */
    public function setVersionName(?string $versionName) : self
    {
        $this->versionName = $versionName;

        return $this;
    }

    /**
     * Get versionName
     *
     * @return string|null
     */
    public function getVersionName() : ?string
    {
        return $this->versionName;
    }
}
