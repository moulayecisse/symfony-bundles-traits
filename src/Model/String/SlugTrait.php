<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\String;

trait SlugTrait
{
    /**
     * Slug
     *
     * @var string
     *
     */
    protected $slug;

    /**
     * Set slug
     *
     * @param  string $slug
     * @return self
     */
    public function setSlug(?string $slug) : self
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
