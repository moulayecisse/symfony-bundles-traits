<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait ColorTrait
{
    /**
     * Color
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false, unique=false)
     * @Assert\Type(type="string")
     * @Assert\NotNull()
     */
    protected $color;

    /**
     * Set color
     *
     * @param  string $color
     * @return self
     */
    public function setColor(string $color) : self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string|null
     */
    public function getColor() : string
    {
        return $this->color;
    }
}
