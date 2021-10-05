<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Mixed;

use Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\String\AddressTrait;
use Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\String\CityTrait;
use Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\String\CountryTrait;
use Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\String\PhoneNumberTrait;
use Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\String\ZipCodeTrait;

trait ContactTrait
{
    use AddressTrait;
    use CityTrait;
    use CountryTrait;
    use CountryTrait;
    use PhoneNumberTrait;
    use ZipCodeTrait;
}