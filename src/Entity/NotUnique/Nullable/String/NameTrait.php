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

trait NameTrait
{
    /**
     * Name
     *
     * @var string|null
     *
     * @ORM\Column(type="string", length=255, nullable=true, unique=false)
     * @Assert\Type(type="string")
     * @Assert\NotNull()
     */
    protected $name;

    /**
     * Set name
     *
     * @param  string $name
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
}
