<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\NotUnique\Nullable\String;

trait TitleTrait
{
    /**
     * Title
     *
     * @var string
     */
    protected $title;

    /**
     * Set title
     *
     * @param  string $title
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
}
