<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


Trait AllergyTrait
{
    /**
     * Allergy
     *
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     *
     * @Assert\NotNull()
     */
    private $allergy;

    /**
     * Set allergy
     *
     * @param  string $allergy
     * @return self
     */
    public function setAllergy(string $allergy) : self
    {
        $this->allergy = $allergy;

        return $this;
    }

    /**
     * Get allergy
     *
     * @return string
     */
    public function getAllergy() : string
    {
        return $this->allergy;
    }
}