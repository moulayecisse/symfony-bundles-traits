<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Mixed;

use Cisse\Bundle\TraitsBundle\Model\Nullable\String\AddressTrait;
use Cisse\Bundle\TraitsBundle\Model\Nullable\String\CityTrait;
use Cisse\Bundle\TraitsBundle\Model\Nullable\String\CountryTrait;
use Cisse\Bundle\TraitsBundle\Model\Nullable\String\PhoneNumberTrait;
use Cisse\Bundle\TraitsBundle\Model\Nullable\String\ZipCodeTrait;

trait ContactTrait
{
    use AddressTrait;
    use CityTrait;
    use CountryTrait;
    use CountryTrait;
    use PhoneNumberTrait;
    use ZipCodeTrait;
}