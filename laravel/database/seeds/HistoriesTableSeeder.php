<?php

use Illuminate\Database\Seeder;
use App\History;
use Carbon\Carbon;


class HistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 過去の日付のデータを作成
        factory(History::class, 1000)->create();

        // 今日の日付のデータを作成
        // チェックアウトがあるデータの作成
        $check_in_at = Carbon::today()->addHours(13)->addMinutes(rand(0, 60 * 3)); // 営業開始から3時間以内にくるとしている
        $check_out_at = clone $check_in_at;
        $check_out_at->addMinutes(rand(0, 60 * 3)); // 滞在時間は3時間いない
        factory(History::class, 2)->create([
            'user_id' => rand(1, 100),
            'purpose' => rand(0, 5),
            'check_in' => $check_in_at,
            'check_out' => $check_out_at,
        ]);
        // チェックアウトがないデータの作成
        factory(History::class, 2)->create([
            'user_id' => rand(1, 100),
            'purpose' => rand(0, 5),
            'check_in' => $check_in_at,
            'check_out' => null,
        ]);
    }
}
