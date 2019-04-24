<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Entity\NotUnique\NotNullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * trait BirthdayTrait.
 */
trait BirthdayTrait
{
    /**
     * Name.
     *
     * @var DateTime
     *
     * @ORM\Column(type="date", nullable=false, unique=false)
     */
    protected $birthday;

    /**
     * Set birthday.
     *
     * @param DateTime $birthday Content
     *
     * @return self
     */
    public function setBirthday(DateTime $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday.
     *
     * @return DateTime|null
     */
    public function getBirthday(): DateTime
    {
        return $this->birthday;
    }
}