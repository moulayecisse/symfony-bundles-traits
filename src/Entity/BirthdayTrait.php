<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait BirthdayTrait.
 */
trait BirthdayTrait
{
    /**
     * Name.
     *
     * @var \DateTime
     *
     * @ORM\Column(type="date", nullable=true)
     */
    private $birthday;

    /**
     * Set birthday.
     *
     * @param \DateTime $birthday Content
     *
     * @return self
     */
    public function setBirthday(\DateTime $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday.
     *
     * @return DateTime
     */
    public function getBirthday(): \DateTime
    {
        return $this->birthday;
    }
}
