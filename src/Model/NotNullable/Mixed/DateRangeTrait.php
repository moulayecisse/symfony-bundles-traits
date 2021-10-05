<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Mixed;

use Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime\DateEndTrait;
use Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime\DateStartTrait;

trait DateRangeTrait
{
    use DateStartTrait;
    use DateEndTrait;
}
