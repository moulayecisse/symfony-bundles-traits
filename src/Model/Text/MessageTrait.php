<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\Text;

trait MessageTrait
{
    /**
     * Message
     *
     * @var string
     */
    protected $message;

    /**
     * Set message
     *
     * @param  string $message
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
}
