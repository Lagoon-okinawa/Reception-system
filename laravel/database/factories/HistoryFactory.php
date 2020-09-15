<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\History;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(History::class, function (Faker $faker) {
    $now = Carbon::now();
    $is_check_out = $faker->numberBetween(0, 1);

    if ($is_check_out) {
        $rand_minutes = $faker->numberBetween(0, 60 * 8);
        $check_out_time = $now->addMinutes($rand_minutes);
    } else {
        $check_out_time = null;
    }

    return [
        'user_id' => $faker->numberBetween(1, 100),
        'purpose' => $faker->numberBetween(0, 5),
        'check_in' => $now,
        'check_out' => $check_out_time,
    ];
});
