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

trait FirstNameTrait
{
    /**
     * Name
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false, unique=false)
     *
     * @Assert\NotBlank()
     * @Assert\Length(min=4, max=50)
     *
     */
    protected $firstName;

    /**
     * Set firstName
     *
     * @param  string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName) : self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string|null
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
}
