<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\Text;

trait ContentTrait
{
    /**
     * Content
     *
     * @var string
     */
    protected $content;

    /**
     * Set content
     *
     * @param  string $content
     * @return self
     */
    public function setContent(?string $content) : self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string|null
     */
    public function getContent() : ?string
    {
        return $this->content;
    }
}
