<?php /** @noinspection MessDetectorValidationInspection */

/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 00:56
 */

namespace Cisse\Traits\Model\Integer;

/**
 * trait IdTrait
 *
 * @package Cisse\Traits
 */
trait IdTrait
{
    /**
     * @var Int
     *
     * @noinspection PhpPropertyNamingConventionInspection
     */
    protected $id;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }
}
