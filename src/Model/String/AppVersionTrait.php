<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\String;

trait AppVersionTrait
{
    /**
     * AppVersion
     *
     * @var string
     */
    protected $appVersion;

    /**
     * Set appVersion
     *
     * @param  string $appVersion
     * @return self
     */
    public function setAppVersion(?string $appVersion) : self
    {
        $this->appVersion = $appVersion;

        return $this;
    }

    /**
     * Get appVersion
     *
     * @return string|null
     */
    public function getAppVersion() : ?string
    {
        return $this->appVersion;
    }
}
