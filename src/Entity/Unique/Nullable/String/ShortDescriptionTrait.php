<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\Unique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait ShortDescriptionTrait
{
    /**
     * ShortDescription
     *
     * @var string
     *
     * @ORM\Column(type="string", length=500, nullable=true, unique=true)
     */
    protected $shortDescription;

    /**
     * Set shortDescription
     *
     * @param  string $shortDescription
     * @return self
     */
    public function setShortDescription(string $shortDescription) : self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string|null
     */
    public function getShortDescription() : ?string
    {
        return $this->shortDescription;
    }
}
