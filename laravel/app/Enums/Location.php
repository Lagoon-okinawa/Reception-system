<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Location extends Enum implements LocalizedEnum
{
    const Nago = 0;
    const Kunigami = 1;
    const Yomitan = 2;
    const Kadena = 3;
    const Uruma = 4;
    const Chatan = 5;
    const Ginowan = 6;
    const Kitanakagusuku = 7;
    const Nakagusuku = 8;
    const Nishihara = 9;
    const Urasoe = 10;
    const Naha = 11;
    const Haebaru = 12;
    const Shimajiri = 13;
    const Nanjo = 14;
    const Tomigusuku = 15;
    const Itoman = 16;
    const Yaeyama = 17;
    const PrefOther = 18;
    const Other = 19;
    const Abord = 20;
}
