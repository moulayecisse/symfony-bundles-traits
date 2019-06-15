<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\String;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait IconTrait
{
    /**
     * Icon
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     * @Assert\Type(type="string")
     */
    protected $icon;

    /**
     * Set icon
     *
     * @param  string $icon
     * @return self
     */
    public function setIcon(string $icon) : self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string|null
     */
    public function getIcon() : ?string
    {
        return $this->icon;
    }
}
