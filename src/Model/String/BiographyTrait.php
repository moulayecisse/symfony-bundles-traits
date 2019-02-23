<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Model\String;

trait BiographyTrait
{
    /**
     * Name.
     *
     * @var string
     */
    protected $biography;

    /**
     * Set biography.
     *
     * @param string $biography Content
     *
     * @return self
     */
    public function setBiography(?string $biography): self
    {
        $this->biography = $biography;

        return $this;
    }

    /**
     * Get biography.
     *
     * @return string|null
     */
    public function getBiography(): ?string
    {
        return $this->biography;
    }
}
