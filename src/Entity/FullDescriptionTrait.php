<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

Trait FullDescriptionTrait
{
    /**
     * FullDescription
     *
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $fullDescription;

    /**
     * Set fullDescription
     *
     * @param  string $fullDescription
     * @return self
     */
    public function setFullDescription(string $fullDescription) : self
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