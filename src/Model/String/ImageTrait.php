<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\NotUnique\Nullable\String;

trait ImageTrait
{
    /**
     * Name
     *
     * @var string
     */
    protected $image;

    /**
     * Set image
     *
     * @param  string $image
     * @return self
     */
    public function setImage(?string $image) : self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string|null
     */
    public function getImage() : ?string
    {
        return $this->image;
    }
}
