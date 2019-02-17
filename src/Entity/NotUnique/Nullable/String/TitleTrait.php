<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait TitleTrait
{
    /**
     * Title
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, unique=false)
     */
    protected $title;

    /**
     * Set title
     *
     * @param  string $title
     * @return self
     */
    public function setTitle(string $title) : self
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
