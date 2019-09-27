<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait ExtensionTrait
{
    /**
     * Name
     *
     * @var string|null
     *
     * @ORM\Column(type="string", length=255, nullable=true, unique=false)
     *
     */
    protected $extension;

    /**
     * Set extension
     *
     * @param  string $extension
     *
     * @return self
     */
    public function setExtension(?string $extension) : self
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string|null
     */
    public function getExtension() : ?string
    {
        return $this->extension;
    }
}
