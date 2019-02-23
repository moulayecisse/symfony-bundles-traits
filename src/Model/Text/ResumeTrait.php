<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\Text;

trait ResumeTrait
{
    /**
     * Resume
     *
     * @var string
     */
    protected $resume;

    /**
     * Set resume
     *
     * @param  string $resume
     * @return self
     */
    public function setResume(?string $resume) : self
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string|null
     */
    public function getResume() : ?string
    {
        return $this->resume;
    }
}
