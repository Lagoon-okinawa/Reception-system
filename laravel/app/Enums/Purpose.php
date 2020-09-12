<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Purpose extends Enum implements LocalizedEnum
{
    const Coworking =   0;
    const Consulting =   1;
    const Manufacturing = 2;
    const Cafe = 3;
    const Events = 4;
    const Others = 5;
}
