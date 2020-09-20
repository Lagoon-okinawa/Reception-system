<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\History;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(History::class, function (Faker $faker) {
    // 13<=A<=B<=21
    // 日付を決める
    $open_at = Carbon::today()
        ->subDays(rand(1, 365))
        ->addHours(13);

    $check_in_minutes = rand(0, 480 - 1); // -1は21:00にチェックインしない対策
    $check_in_at = $open_at->addMinutes($check_in_minutes);
    $check_out_at = clone $check_in_at;

    $staying_minutes = rand(1, 480 - $check_in_minutes); // 滞在分数を定義する
    $check_out_at->addMinutes($staying_minutes);

    return [
        'user_id' => $faker->numberBetween(1, 100),
        'purpose' => $faker->numberBetween(0, 5),
        'check_in' => $check_in_at,
        'check_out' => $check_out_at,
    ];
});
