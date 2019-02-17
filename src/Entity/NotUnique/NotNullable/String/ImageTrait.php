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

trait ImageTrait
{
    /**
     * Name
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false, unique=false)
     * @var string
     * @Assert\Type(type="string")
     */
    protected $image;

    /**
     * Set image
     *
     * @param  string $image
     * @return self
     */
    public function setImage(string $image) : self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string|null
     */
    public function getImage() : ?string
    {
        return $this->image;
    }
}
