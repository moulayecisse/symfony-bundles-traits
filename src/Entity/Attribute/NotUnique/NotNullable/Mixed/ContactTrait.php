<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Mixed;

use Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\String\AddressTrait;
use Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\String\CityTrait;
use Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\String\CountryTrait;
use Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\String\PhoneNumberTrait;
use Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\String\ZipCodeTrait;

trait ContactTrait
{
    use AddressTrait;
    use CityTrait;
    use CountryTrait;
    use CountryTrait;
    use PhoneNumberTrait;
    use ZipCodeTrait;
}