<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait VersionNameTrait
{
    /**
     * VersionName
     *
     * @var string|null
     *
     * @ORM\Column(type="string", length=255, nullable=true, unique=false)
     * @Assert\Type(type="string")
     * @Assert\NotNull()
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
