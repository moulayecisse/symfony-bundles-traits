<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Mixed;

use Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\String\AddressTrait;
use Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\String\CityTrait;
use Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\String\CountryTrait;
use Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\String\PhoneNumberTrait;
use Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\String\ZipCodeTrait;

trait ContactTrait
{
    use AddressTrait;
    use CityTrait;
    use CountryTrait;
    use CountryTrait;
    use PhoneNumberTrait;
    use ZipCodeTrait;
}