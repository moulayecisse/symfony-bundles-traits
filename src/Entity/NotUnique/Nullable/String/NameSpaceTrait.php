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

trait NameSpaceTrait
{
    /**
     * NameSpace
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, unique=false)
     * @Assert\Type(type="string")
     * @Assert\NotNull()
     */
    protected $nameSpace;

    /**
     * Set nameSpace
     *
     * @param  string $nameSpace
     * @return self
     */
    public function setNameSpace(string $nameSpace) : self
    {
        $this->nameSpace = $nameSpace;

        return $this;
    }

    /**
     * Get nameSpace
     *
     * @return string|null
     */
    public function getNameSpace() : ?string
    {
        return $this->nameSpace;
    }
}
