<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Industry extends Enum implements LocalizedEnum
{
    const Sales = 0;
    const Accounting = 1;
    const PlanningAndManagement = 2;
    const OfficeAssistant = 3;
    const Service = 4;
    const Consultants = 5;
    const Financial = 6;
    const Teacher = 7;
    const AgricultureOrFisheries = 8;
    const TechnicalJob = 9;
    const MedicalProfessional = 10;
    const Engineer = 11;
    const Designer = 12;
    const Other = 13;
}
