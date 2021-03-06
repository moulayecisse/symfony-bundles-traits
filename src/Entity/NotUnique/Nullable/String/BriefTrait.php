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

trait BriefTrait
{
    /**
     * Brief
     *
     * @var string|null
     *
     * @ORM\Column(type="string", length=255, nullable=true, unique=false)
     * @Assert\Type(type="string")
     * @Assert\NotNull()
     */
    protected $brief;

    /**
     * Set brief
     *
     * @param  string $brief
     * @return self
     */
    public function setBrief(?string $brief) : self
    {
        $this->brief = $brief;

        return $this;
    }

    /**
     * Get brief
     *
     * @return string|null
     */
    public function getBrief() : ?string
    {
        return $this->brief;
    }
}
