<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\Text;

trait FullDescriptionTrait
{
    /**
     * FullDescription
     *
     * @var string
     */
    protected $fullDescription;

    /**
     * Set fullDescription
     *
     * @param  string $fullDescription
     * @return self
     */
    public function setFullDescription(?string $fullDescription) : self
    {
        $this->fullDescription = $fullDescription;

        return $this;
    }

    /**
     * Get fullDescription
     *
     * @return string|null
     */
    public function getFullDescription() : ?string
    {
        return $this->fullDescription;
    }
}
