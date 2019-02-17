<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Traits\Entity;

use Cisse\Traits\Exceptions\InvalidGenderException;
use Cisse\Traits\Interfaces\GenderInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait GenderTrait
{
    /**
     * Gender
     *
     * @var string
     *
     * @ORM\Column(type="string", length=1, nullable=true)
     * @Assert\Type(type="string")
     * @Assert\Length(max="1", min="1")
     * @Assert\NotNull()
     */
    protected $gender;

    /**
     * Set gender
     *
     * @param  string $gender
     * @return self
     */
    public function setGender(string $gender) : self
    {
        if (in_array($gender, [GenderInterface::MALE, GenderInterface::FEMALE])) {
            $this->gender = $gender;
        } else {
            throw(new InvalidGenderException());
        }

        return $this;
    }

    /**
     * Get gender
     *
     * @return string|null
     */
    public function getGender() : ?string
    {
        return $this->gender;
    }
}
