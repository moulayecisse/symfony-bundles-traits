<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Mixed;

use Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\String\AddressTrait;
use Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\String\CityTrait;
use Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\String\CountryTrait;
use Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\String\PhoneNumberTrait;
use Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\String\ZipCodeTrait;

trait ContactTrait
{
    use AddressTrait;
    use CityTrait;
    use CountryTrait;
    use CountryTrait;
    use PhoneNumberTrait;
    use ZipCodeTrait;
}