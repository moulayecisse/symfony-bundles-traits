<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Model\Date;



/**
 * trait BirthdayTrait.
 */
trait BirthdayTrait
{
    /**
     * Name.
     *
     * @var \DateTime
     */
    protected $birthday;

    /**
     * Set birthday.
     *
     * @param \DateTime $birthday Content
     *
     * @return self
     */
    public function setBirthday(?\Datetime $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday.
     *
     * @return \DateTime|null
     */
    public function getBirthday(): ?\DateTime
    {
        return $this->birthday;
    }
}
