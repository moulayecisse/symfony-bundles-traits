<?php
/**
 * Created by PhpStorm.
 * User: moulayeye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


Trait SlugTrait
{
    /**
     * Slug
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $slug;

    /**
     * Set slug
     *
     * @param  string $slug
     * @return self
     */
    public function setSlug(string $slug) : self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug() : string
    {
        return $this->slug;
    }
}