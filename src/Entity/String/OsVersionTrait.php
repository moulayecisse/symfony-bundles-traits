<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\String;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait OsVersionTrait
{
    /**
     * OsVersion
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     * @Assert\Type(type="string")
     */
    protected $osVersion;

    /**
     * Set osVersion
     *
     * @param  string $osVersion
     * @return self
     */
    public function setOsVersion(string $osVersion) : self
    {
        $this->osVersion = $osVersion;

        return $this;
    }

    /**
     * Get osVersion
     *
     * @return string|null
     */
    public function getOsVersion() : ?string
    {
        return $this->osVersion;
    }
}
