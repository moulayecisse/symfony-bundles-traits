<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\Text;

trait DescriptionTrait
{
    /**
     * Description
     *
     * @var string
     */
    protected $description;

    /**
     * Set description
     *
     * @param  string $description
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
}
