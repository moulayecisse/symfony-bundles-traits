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

trait SerialTrait
{
    /**
     * Serial
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, unique=false)
     * @Assert\Type(type="string")
     * @Assert\NotNull()
     */
    protected $serial;

    /**
     * Set serial
     *
     * @param  string $serial
     * @return self
     */
    public function setSerial(?string $serial) : self
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string|null
     */
    public function getSerial() : ?string
    {
        return $this->serial;
    }
}
