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

trait CodeTrait
{
    /**
     * Code
     *
     * @var string|null
     *
     * @ORM\Column(type="string", length=255, nullable=true, unique=false)
     * @Assert\Type(type="string")
     * @Assert\NotNull()
     */
    protected $code;

    /**
     * Set code
     *
     * @param  string $code
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
}
