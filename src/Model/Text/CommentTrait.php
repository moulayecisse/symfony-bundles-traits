<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\Text;

trait CommentTrait
{
    /**
     * Comment
     *
     * @var string
     */
    protected $comment;

    /**
     * Set comment
     *
     * @param  string $comment
     * @return self
     */
    public function setComment(?string $comment) : self
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
