<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CommentTrait
{
    /**
     * Comment
     *
     * @var string
     *
     * @ORM\Column(type="text", nullable=false, unique=false)
     */
    protected $comment;

    /**
     * Set comment
     *
     * @param  string $comment
     * @return self
     */
    public function setComment(string $comment) : self
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string|null
     */
    public function getComment() : ?string
    {
        return $this->comment;
    }
}
