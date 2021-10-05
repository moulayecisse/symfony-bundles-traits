<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Mixed;

use Cisse\Bundle\TraitsBundle\Model\NotNullable\String\AddressTrait;
use Cisse\Bundle\TraitsBundle\Model\NotNullable\String\CityTrait;
use Cisse\Bundle\TraitsBundle\Model\NotNullable\String\CountryTrait;
use Cisse\Bundle\TraitsBundle\Model\NotNullable\String\PhoneNumberTrait;
use Cisse\Bundle\TraitsBundle\Model\NotNullable\String\ZipCodeTrait;

trait ContactTrait
{
    use AddressTrait;
    use CityTrait;
    use CountryTrait;
    use CountryTrait;
    use PhoneNumberTrait;
    use ZipCodeTrait;
}