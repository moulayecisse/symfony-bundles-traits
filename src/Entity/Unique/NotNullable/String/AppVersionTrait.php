<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\Unique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait AppVersionTrait
{
    /**
     * AppVersion
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false, unique=true)
     * @Assert\Type(type="string")
     * @Assert\NotNull()
     */
    protected $appVersion;

    /**
     * Set appVersion
     *
     * @param  string $appVersion
     * @return self
     */
    public function setAppVersion(string $appVersion) : self
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
