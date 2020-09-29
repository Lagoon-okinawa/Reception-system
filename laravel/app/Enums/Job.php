<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Job extends Enum implements LocalizedEnum
{
    const Student = 0;
    const CollegeStudent = 1;
    const Employee = 2;
    const CivilServant = 3;
    const SelfEmployed = 4;
    const Freelance = 5;
    const Housework = 6;
    const Unemployed = 7;
    const Other = 8;
}
