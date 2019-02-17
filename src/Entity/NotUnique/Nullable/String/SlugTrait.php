<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait SlugTrait
{
    /**
     * Slug
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, unique=false)
     *
     */
    protected $slug;

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
     * @return string|null
     */
    public function getSlug() : ?string
    {
        return $this->slug;
    }
}
