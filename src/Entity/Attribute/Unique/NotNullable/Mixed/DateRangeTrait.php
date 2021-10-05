<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Mixed;

use Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\DateTime\DateEndTrait;
use Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\DateTime\DateStartTrait;

trait DateRangeTrait
{
    use DateStartTrait;
    use DateEndTrait;
}
